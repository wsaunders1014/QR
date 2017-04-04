<?php

if (!defined('BASEPATH'))
    die();

class Targus extends Main_Controller {

    public $plivo_sms;
    public $plivo_call;
    protected $fromno = '14156121160';
    protected $session_id;

    function __construct() {
        parent::__construct();
        $my_session_id = $this->session->userdata('my_session_id');
        if(empty($my_session_id)) {
            $uniqueId = uniqid($this->input->ip_address().$this->input->user_agent(), TRUE);
            $this->session->set_userdata("my_session_id", md5($uniqueId));
        }
        $this->session_id = $this->session->userdata('my_session_id');
    }

    public function doTargusNuSOAPCall() {

        $post = $this->input->post();
       
        $data = array();
        if (!empty($post)) {
            $phone = $this->input->post('phone');
            $phone = preg_replace("/[^0-9]/", "", $phone);

            $data['firstName'] = $post['first_name'];
            $data['lastName'] = $post['last_name'];
            $data['phone'] = $phone;
            $data['email'] = $post['email'];

            $this->db->select('phone_score');
            $rowset = $this->db->get_where('targus', array('phone_number' => $data['phone'], 'email_address' => $data['email']))->result();

            if (count($rowset) > 0) {
                if ($rowset[0]->phone_score < 35 ||
                        $rowset[0]->phone_score == 37 ||
                        $rowset[0]->phone_score == 42 ||
                        $rowset[0]->phone_score == 47 ||
                        $rowset[0]->phone_score == 52 ||
                        $rowset[0]->phone_score == 57 ||
                        $rowset[0]->phone_score == 62) {
                    $result = 'false';
                } else {
                    $result = 'true';
                }
            } else {

                $wsdlURL = "http://webapp.targusinfo.com/ws-getdata/query.asmx?WSDL";
                $client = new SoapClient($wsdlURL);
                if ($data['phone'] != '' && isset($data['phone'])) {

                    $soap_body = $this->getTargusSoapBody($data);
                    $targ_response = $client->query($soap_body);
                    $value = $targ_response->response->result->element->value;
                    $value_xml = simplexml_load_string($value);
                    $phone_score = ((string) $value_xml[0]->Phones->Phone["score"]);
                    $email_score = ((string) $value_xml[0]->eMailAddresses->eMail["score"]);
                    $targusdata = array(
                        'session_id' => $this->session_id,
                        'first_name' => $post['first_name'],
                        'last_name' => $post['last_name'],
                        'phone_number' => $value_xml[0]->Phones->Phone,
                        'phone_score' => $phone_score,
                        'email_address' => (string)$value_xml[0]->eMailAddresses->eMail,
                        'email_score' => $email_score,
                        'date_time' => date("Y-m-d H:i:s")
                    );
                    $this->db->insert('targus', $targusdata);
                    if ($phone_score < 35 ||
                            $phone_score == 37 ||
                            $phone_score == 42 ||
                            $phone_score == 47 ||
                            $phone_score == 52 ||
                            $phone_score == 57 ||
                            $phone_score == 62) {
                        $result = 'false';
                    } else {
                        $result = 'true';
                    }
                } else {
                    $result = 'true';
                }
            }
        } else {
            $result = 'true';
        }

        if ($result == 'false') {
            $this->db->update('lead', array('Is_routed' => 0), array('session_id' => $this->session_id));
        }
        echo $result;
        exit;
        /* $json = new JsonModel(array('result' => $result));
          $json->setTerminal(true);
          return $json; */
    }

    private function getTargusSoapBody(array $data) {

        $namespace = "http://TARGUSinfo.com/WS-GetData";
        $myUN = 'EQMedia';
        $myPW = '^yxI690m';
        $mySI = '9202501407';
        $ip = '173.344.45.454';
        $fone = '<Contact><Names><Name type="C"><First>' . $data['firstName'] . '</First><Middle></Middle><Last>' . $data['lastName'] . '</Last></Name></Names><Addresses></Addresses><Phones><Phone score="1" appends="validation,mobile,tz,dst,st,daconnected,BPI,active">' . $data['phone'] . '</Phone></Phones><eMailAddresses><eMail score="1" appends="validation,reason,repository">' . $data['email'] . '</eMail></eMailAddresses><IPAddresses><IPAddress appends="validation,country,ST">' . $ip . '</IPAddress></IPAddresses></Contact>'; // phone to lookup
        $elemId = '3226';
        //$transId = uniqid();
        $transId = rand(1,100000000);

        return array(
            'xmlns' => $namespace,
            'origination' => array(
                'username' => $myUN,
                'password' => $myPW
            ),
            'serviceId' => $mySI,
            'transId' => $transId,
            'elements' => array(
                'id' => $elemId
            ),
            'serviceKeys' => array(
                'id' => $elemId,
                'serviceKey' => array(
                    'id' => '875',
                    'value' => $fone
                )
            )
        );
    }

    public function plivosms() {
        $session_id = $this->session_id;
        $fromno = $this->fromno;
        $post = $this->input->post();

        if (!empty($post)) {
            $phone = $this->input->post('phone');
            $phone = preg_replace("/[^0-9]/", "", $phone);
            $data['to_number'] = $phone;
            $tonumber = "1" . $data['to_number'];
            $this->db->select('message');
            $rowset = $this->db->get_where('plivo_sms_details', array('to_number' => $data['to_number'], 'session_id' => $session_id))->result();
            if (count($rowset) > 0) {
                $message = $rowset[0]->message;
                $text = "Your verification code is " . $message . " - Quote Runner - Your mover matching service";
                $counter = '1';
            } else {
                $message = $this->generateRandomString(2);
                $text = "Your verification code is " . $message . " - Quote Runner - Your mover matching service";
                $counter = '0';
            }

            $params = array(
                'src' => $fromno, // Sender's phone number with country code 13342597057
                'dst' => $tonumber, // Receiver's phone number with country code 16263216095
                'text' => $text, // Your SMS text message
                'method' => 'POST' // The method used to call the url
            );

            $value = stripslashes(json_encode($params));

            $url = 'https://MANTU4OTRJNDJKNJAXOT:ZWQ5ZjBhYmNhOTcxZmZhZGJmZDI5ODY4ZDBlNzZm@api.plivo.com/v1/Account/MANTU4OTRJNDJKNJAXOT/Message/';
            $ch = curl_init($url);
            curl_setopt_array($ch, array(
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_POSTFIELDS => $value,
                CURLOPT_FOLLOWLOCATION => 1,
                CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Content-Length: ' . strlen($value)),
                CURLOPT_TIMEOUT => 10
            ));
            $response = curl_exec($ch);
            curl_close($ch);

            $resp = json_decode($response, true);
            if ($counter == '0') {
                $psmsdata = array(
                    'session_id' => $session_id,
                    'from_number' => $fromno,
                    'to_number' => $data['to_number'],
                    'message' => $message,
                    'message_uuid' => $resp['message_uuid'][0],
                    'created_date' => date("Y-m-d H:i:s")
                );
                $this->db->insert('plivo_sms_details',$psmsdata);
            }
            $result = 'true';
        } else {
            $result = 'false';
        }
        echo $result;
        exit;
        /* $json = new JsonModel(array('result' => $result));
          $json->setTerminal(true);
          return $json; */
    }

    public function confirmVerification() {
        $session_id = $this->session_id;
        $post = $this->input->post();
        $message = $post['verify-code'];
        $type = $post['type'];
        $phone = $this->input->post('phone');
        $to_number = preg_replace("/[^0-9]/", "", $phone);

        if ($type != 'call') {
            $this->db->select('session_id');
            $rowset = $this->db->get_where('plivo_sms_details', array('message' => $message, 'to_number' => $to_number, 'session_id' => $session_id))->result();
            if (count($rowset) > 0) {
                $result = 'true';
            } else {
                $result = 'false';
            }
        } else {
            $this->db->select('session_id');
            $rowset = $this->db->get_where('plivo_call_details', array('message' => $message, 'to_number' => $to_number, 'session_id' => $session_id))->result();
            if (count($rowset) > 0) {
                $result = 'true';
            } else {
                $result = 'false';
            }
        }
        if ($result == 'true') {
            //$leadsTable = $this->getLeadsTable();
            $this->db->update('lead', array('Is_routed' => 1), array('session_id' => $session_id));
            if ($type != 'call')
                $this->db->update('plivo_sms_details', array('verified' => 1), array('to_number' => $to_number, 'session_id' => $session_id));
            else
                $this->db->update('plivo_call_details', array('verified' => 1), array('to_number' => $to_number, 'session_id' => $session_id));
        }
        echo $result;
        exit;
        /* $json = new JsonModel(array('result' => $result));
          $json->setTerminal(true);
          return $json; */
    }

    public function plivocall() {

        $session_id = $this->session_id;
        $fromno = $this->fromno;

        $post = $this->input->post();
        if (!empty($post)) {
            $phone = $this->input->post('phone');
            $data1['to_number'] = preg_replace("/[^0-9]/", "", $phone);
            $tonumber = "1" . $data1['to_number'];

            $this->db->select('session_id');
            $rowset = $this->db->get_where('plivo_call_details', array('to_number' => $data1['to_number'], 'session_id' => $session_id))->result();

            if (count($rowset) > 0) {
                $counter = '1';
            } else {
                $counter = '0';
            }

            $data = array(
                'from' => $fromno,
                'to' => $tonumber,
                'answer_url' => 'http://quoterunner.co/targus/plivoanswer',
                'hangup_url' => 'http://quoterunner.co/targus/plivohangup',
            );

            $value = stripslashes(json_encode($data));
            $url = 'https://MANTU4OTRJNDJKNJAXOT:ZWQ5ZjBhYmNhOTcxZmZhZGJmZDI5ODY4ZDBlNzZm@api.plivo.com/v1/Account/MANTU4OTRJNDJKNJAXOT/Call/';
            $ch = curl_init($url);
            curl_setopt_array($ch, array(
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_POSTFIELDS => $value,
                CURLOPT_FOLLOWLOCATION => 1,
                CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Content-Length: ' . strlen($value)),
                CURLOPT_TIMEOUT => 10
            ));

            $response = curl_exec($ch);
            curl_close($ch);
            $resp = json_decode($response, true);
            if ($counter == 0) {
                $text = $this->generateRandomString(2);
                $pcalldata = array(
                    'session_id' => $session_id,
                    'from_number' => $fromno,
                    'to_number' => $data1['to_number'],
                    'message' => $text,
                    'request_uuid' => $resp['request_uuid'],
                    'created_date' => date("Y-m-d H:i:s")
                );
                $this->db->insert('plivo_call_details', $pcalldata);
            } else {
                $pcalldata = array(
                    'request_uuid' => $resp['request_uuid'],
                    'created_date' => date("Y-m-d H:i:s")
                );
                $this->db->update('plivo_call_details', $pcalldata, array('to_number' => $data1['to_number'], 'session_id' => $session_id));
            }
            $result = 'true';
        } else {
            $result = 'false';
        }
        echo $result;
        exit;
    }

    private function generateRandomString($length = 2) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function plivoanswer() {

        $session_id = $this->session_id;
        $fromno = $this->fromno;

        $paramdata = json_encode($this->input->post());
        $resdata = json_decode($paramdata, true);
//        echo "<pre>";
//        print_r($resdata);
//        echo "</pre>";
//        exit;
        $this->db->select('message');
        $resultset = $this->db->get_where('plivo_call_details',array('request_uuid' => $resdata['RequestUUID']))->result();
        $row = !empty($resultset) ? $resultset[0] : null;
        if (isset($row->message) && $row->message != null) {
            $wordstring = $this->numbertowords($row->message);
        } else {
            $text = $this->generateRandomString(2);
            $pcalldata = array(
                'session_id' => $session_id,
                'from_number' => $fromno,
                'to_number' => $resdata['To'],
                'message' => $text,
                'request_uuid' => $resdata['RequestUUID'],
                'created_date' => date("Y-m-d H:i:s")
            );
            $this->db->insert('plivo_call_details', $pcalldata);
            $wordstring = $this->numbertowords($text);
        }
        $post = $this->input->post();
        $param = json_encode($post);
        $resp = json_decode($param, true);
        $pcalldata = array(
            'call_uuid' => $resp['CallUUID']
        );
        $this->db->update('plivo_call_details', $pcalldata, array('request_uuid' => $resp['RequestUUID']));


//        $response = new \Zend\Http\Response();
//        $response->getHeaders()->addHeaderLine('Content-Type', 'text/xml; charset=utf-8');
        $voicepath = base_url() . 'plivo1/qrvc.wav';
        $content = '<Response>
                                    <Record action="http://quoterunner.co/targus/plivorecord" startOnDialAnswer="true" redirect="false"/>
                                    <Play>' . $voicepath . '</Play>
                                <Speak>' . $wordstring . '</Speak>
                                    </Response>';
        header();
        return $this->output
                        ->set_content_type('text/xml; charset=utf-8')
                        ->set_status_header(200)
                        ->set_output($content);
        //return false;
    }

    public function plivohangup() {

        $post = $this->input->post();
        $param = json_encode($post);
        $resp = json_decode($param, true);
        $pcalldata = array(
            'call_duration' => $resp['Duration'],
            'total_cost' => $resp['TotalCost']
        );
        $this->db->update('plivo_call_details', $pcalldata, array('request_uuid' => $resp['ALegRequestUUID']));
        return false;
    }

    public function plivorecord() {
        $post = $this->input->post();
        $param = json_encode($post);
        $resp = json_decode($param, true);
        $pcalldata = array(
            'record_url' => $resp['RecordUrl']
        );
        $this->db->update('plivo_call_details', $pcalldata, array('request_uuid' => $resp['ALegRequestUUID']));
        return false;
    }

    private function numbertowords($number) {
        $nums = array(
            0 => ' zero',
            1 => ' one',
            2 => ' two',
            3 => ' three',
            4 => ' four',
            5 => ' five',
            6 => ' six',
            7 => ' seven',
            8 => ' eight',
            9 => ' nine',
        );
        $string = str_replace(array_keys($nums), array_values($nums), $number);
        return $string;
    }

}

?>