<?php

if (!defined('BASEPATH'))
    die();

class Validate extends Main_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('citystate_model');
        $my_session_id = $this->session->userdata('my_session_id');
        if (empty($my_session_id)) {
            $uniqueId = uniqid($this->input->ip_address() . $this->input->user_agent(), TRUE);
            $this->session->set_userdata("my_session_id", md5($uniqueId));
        }
    }

    public function index() {
        
    }

    public function searchForCityState() {
        $search_term = $this->input->post('search_term');
        //var_dump($search_term);
        if (is_numeric($search_term)) {
            $list = $this->searchByZipcode($search_term);
        } else {
            $list = $this->searchByCityState($search_term);
        }
        echo json_encode($list);
        exit;
        //echo json_encode($result);
    }
    public function searchForCityState2() {
        $search_term = $this->input->post('search_term');
        //var_dump($search_term);
        if (is_numeric($search_term)) {
            $list = $this->searchByZipcode2($search_term);
        } else {
            $list = $this->searchByCityState($search_term);
        }
        echo json_encode($list);
        exit;
        //echo json_encode($result);
    }

    public function searchByZipcode($search_term) {

        $list = $this->citystate_model->searchCityStateByZipcode($search_term);
        return $list;
    }
    public function searchByZipcode2($search_term) {

        $list = $this->citystate_model->searchCityStateByZipcode2($search_term);
        return $list;
    }

    public function searchByCityState($search_term, $mobile) {

        $list = $this->citystate_model->searchForCityStateNew($search_term, $mobile);
        return $list;
    }

    public function firstname() {
        return $this->validate('first_name');
    }

    public function lastname() {
        return $this->validate('last_name');
    }

    public function phone() {
        return $this->validate('phone_number');
    }

    public function phone2() {
        return $this->validate('phone');
    }

    public function email() {
        return $this->validate('email_address');
    }

    public function rooms() {
        return $this->validate('number_of_rooms');
    }

    public function fromZipcode() {
        return $this->validate('zip_from');
    }

    public function toZipcode() {
        return $this->validate('zip_to');
    }

    public function movedate() {
        return $this->validate('move_date');
    }

    public function checked() {
        return $this->validate_auto('checked');
    }

    public function make() {
        return $this->validate_auto('make');
    }

    public function model() {
        return $this->validate_auto('model');
    }

    public function year() {
        return $this->validate_auto('year');
    }

    public function clearAuto() {
        return $this->clear_auto();
    }

    public function checkedStorage() {
        return $this->validate('storage');
    }

    public function clickToCall() {
        return $this->validate_call();
    }

//    public function send() {
//        if ($this->hasAccess()) {
//            if ($this->send_moving_lead()) {
//                $auto_lead = $this->send_auto_lead();
//                if ($auto_lead == 'accepted' || $auto_lead == 'unchecked') {
//                    $result = 'true';
//                }
//            }
//            return new JsonModel(array('result' => $result));
//        }
//        return new ViewModel();
//    }
//
//    //send prepares the data and returns the result of its' success to the frontend.
//    public function send_moving_lead() {
//        $leadsTable = $this->getLeadsTable();
//        $request = $this->getRequest();
//        $post = $request->getPost();
//        //$session = $this->getSession();
//        //	$session_id = $session->getId();
//        $resultset = $leadsTable->select(array('session_id' => $this->session->userdata('session_id')));
//        $row = $resultset->current();
//        $params = $row->getArrayCopy();
//        $params['source'] = $post->source;
//        if ($this->isEverythingSet($params)) {
//            $this->enqueue($params);
//            $result = true;
//        } else {
//            $result = false;
//        }
//        return $result;
//    }
//
//    public function send_auto_lead() {
//        $autoTransportLeadsTable = $this->getAutoTransportLeadsTable();
//        $session = $this->getSession();
//        $session_id = $session->getId();
//        $resultset = $autoTransportLeadsTable->select(array('session_id' => $session_id));
//        $row = $resultset->current();
//        $params = $row->getArrayCopy();
//        if ($row->checked == 1) {
//            if ($this->isEverythingSet($params)) {
//                $this->enqueue_auto_transport($params);
//                $result = 'accepted';
//            } else {
//                $result = 'rejected';
//            }
//        } else {
//            $result = 'unchecked';
//        }
//        return $result;
//    }
//
//    //isEverythingSet varifies that no parameter is left empty.
//    public function isEverythingSet($params) {
//        foreach ($params as $value) {
//            if (empty($value)) {
//                return 'false';
//            }
//        }
//        return 'true';
//    }
//
//    //enqueue puts leads into the leads_submissions table to be submitted to the matrix
//    public function enqueue($params) {
//        unset($params['last_updated']);
//        unset($params['id']);
//        unset($params['phone_number_2']);
//        unset($params['Is_routed']);
//        $params['time_submitted'] = date("Y-m-d H:i:s");
//        $lst = $this->getLeadsSubmissionsTable();
//        $lst->insert($params);
//    }
//
//    public function enqueue_auto_transport($params) {
//        unset($params['last_updated']);
//        unset($params['id']);
//        unset($params['checked']);
//        $params['time_submitted'] = date("Y-m-d H:i:s");
//        $lst = $this->getAutoTransportLeadsSubmissionsTable();
//        $lst->insert($params);
//    }
    //this is the universal validation for all fields. $field stores what field is being validated.
    public function validate($field = null) {
        if ($this->hasAccess()) {
            $this->load->model('textmatch_model');
            $this->load->model('lead_model');
            $data = $this->input->post();

            if (array_key_exists($field, $data)) {
//                $leadsTable = $this->getLeadsTable();
//                $rowset = $leadsTable->select(array('session_id' => $this->session->userdata('session_id')));
//                $row = $rowset->current();
                /* if(!empty($row->phone_number_2) and $field != 'phone_number_2'){
                  $data['phone_number_2'] = '0000000000';
                  } */
                $result = 'true';
                $error = '';
                //$data['received_timestamp'] = date("Y-m-d H:i:s");
                if ($field == 'phone_number'  || $field == 'phone' ) {
                    //$data[$field]= filter_var( $data[$field], FILTER_SANITIZE_NUMBER_INT);
                    $data[$field] = preg_replace("/[^0-9]/", "", $data[$field]);
                    $result = $this->verify_phone($data[$field]);
                    $result2 = strlen($data[$field]) == 10 ? true : false;
                    $this->store_number($data[$field]);
                    if ($result == 'true' && $result2 == true) {
                        $areacodes = array('888', '800', '877', '866', '900','000');
                        if (in_array(substr($data[$field], 0, 3), $areacodes)) {
                            $result = 'false';
                        }
                        switch (substr($data[$field], 3, 7)) {
                            case '0000000':
                            case '1111111':
                            case '2222222':
                            case '3333333':
                            case '4444444':
                            case '5555555':
                            case '6666666':
                            case '7777777':
                            case '8888888':
                            case '9999999':
                            case '5551212':
                                $result = 'false';
                            default:
                        }
                    } else {
                        $result = 'false';
                    }
                }
                if ($field == 'city_to') {
                    $city_to = explode(',', $data[$field]);
                    unset($data[$field]);
                    $data['zip_to'] = $city_to[1];
                }
                if ($field == 'zip_to' || $field == 'zip_from') {
                    if (!$this->citystate_model->cityStateByZipcodeBool($data[$field]) || strlen($data[$field]) < 4 ) {
                        $result = 'false';
                    }
                    /* if($data[$field] == '00000'){
                      $result = 'false';
                      } */
                }
                if ($field == 'first_name') {

                    if ($this->textmatch_model->isExactName($data[$field])) {
                        //$error = $data[$field].' contains a blocked word';
                        $result = 'false';
                    }

                    if ($this->textmatch_model->check_three_repeating_characters($data[$field])) {
                        $result = 'false';
                    }

                    $vowels = array('a', 'e', 'i', 'o', 'u', 'y');
                    $vowelfound = false;
                    foreach ($vowels as $vowel) {
                        if (stripos($data[$field], $vowel) !== false) {
                            $vowelfound = true;
                        }
                    }
                    if (!$vowelfound && strlen($data[$field]) > 2) {
                        $result = 'false';
                    }
                    $re = '/([0-9])|([\/~\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\])/';
                    if (preg_match($re, $data[$field], $match)) {
                        //print_r($match);
                        $result = "false";
                    }
                }
                if ($field == 'last_name') {
                    if ($this->textmatch_model->isExactName($data[$field])) {
                        //$error = $data[$field].' contains a blocked word';
                        $result = 'false';
                    }
                    if ($this->textmatch_model->check_three_repeating_characters($data[$field])) {
                        $result = 'false';
                    }
                    $vowels = array('a', 'e', 'i', 'o', 'u', 'y');
                    $vowelfound = false;
                    foreach ($vowels as $vowel) {
                        if (stripos($data[$field], $vowel) !== false) {
                            $vowelfound = true;
                        }
                    }



                    if (!$vowelfound && strlen($data[$field]) > 2) {
                        $result = 'false';
                        //$error = 'No vowel found';
                    }

                    $re = '/([0-9])|([\/~\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\])/';
                    if (preg_match($re, $data[$field], $match)) {
                        //print_r($match);
                        $result = "false";
                    }
                }
                if ($field == 'email_address') {
                    //$result = $this->verify_email($data[$field]);
                    //$popular_domains = array('@outlook.com','@comcast.net','@msn.com','@sbcglobal.net','@roadrunner.com','@verizon.net');
                    $domain = stristr($data[$field], '@');
                    $address = stristr($data[$field], '@', true);
                    $address_length = strlen($address);
                    if ($this->textmatch_model->isFullEmail($data[$field]) || $this->textmatch_model->isAddressEmail($address) || $this->textmatch_model->isDomainEmail($domain)) {
                        $result = 'false';
                    }
                    preg_match_all('/(.)\1+/', $data[$field], $matches);
                    $special_chars_occurs = array_combine($matches[1], array_map('strlen', $matches[0]));
                    if($special_chars_occurs['*'] > 0 || $special_chars_occurs['#'] > 0 
                            || $special_chars_occurs['$'] > 0 || $special_chars_occurs['&'] > 0) {
                        $result = 'false';
                    }
                   
                    if (!filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
                        $result = 'false';
                    }
                    if (strcasecmp($domain, '@gmail.com') == 0) {
                        if ($address_length < 6 || $address_length > 30) {
                            $result = 'false';
                        }
                    } else {
                        if ($address_length <= 3) {
                            $result = 'false';
                        }
                    }
                    //$result = 'false';
                }
                if ($field == 'move_date') {
                    //var_dump($param->move_date);
                    if(empty($data[$field]))
                        $result = "false";
                    else 
                        $data[$field] = date("Y-m-d", strtotime($data[$field]));
                    //var_dump($data[$field]);
                }
                //var_dump($data[$field]);
                if(empty($data[$field]))
                   $result = "false";
                $session_id = $this->session->userdata('my_session_id');
                if(in_array($field, array('first_name','last_name','email_address','phone_number','phone'))) {
                    if ($field == 'email_address') {
                        $data['email'] = $data[$field];
                        unset($data[$field]);
                    } else if ($field == 'phone_number') {
                        $data['phone'] = $data[$field];
                        unset($data[$field]);
                    }
                    if($result == 'true')
                    	$this->lead_model->update($data, $session_id);
                }
                if($field == 'number_of_rooms'){
                	if($data[$field] == ''){
                		$result ='false';
                	}
                }
                if (in_array($field, array('zip_to', 'zip_from', 'move_date','number_of_rooms'))) {
                    $Lead = $this->lead_model->getLead($session_id);
                    if ($field == 'zip_to')
                        $key = 'to_zip_code';
                    else if ($field == 'zip_from')
                        $key = 'from_zip_code';
                    else if($field == 'number_of_rooms') 
                        $key = 'move_size';
                    else
                        $key = $field;
                   
                    if($result == 'true')
                        $this->lead_model->updateLeadMeta($key, $data[$field], $Lead[0]->lead_id);
                }
                // $leadsTable->update($data, array('session_id' => $this->session->userdata('session_id')));
            } else {
                $result = 'false';
            }
            /* $response = array(
              'result' => $result,
              'error' => $error
              ); */

//            $json = new JsonModel(array('result' => $result));
//            $json->setTerminal(true);
//            return $json;
            echo $result;
            exit;
        }
        //return new ViewModel();
    }

    /*
      public function validate_auto($field = null) {
      if ($this->hasAccess()) {
      $request = $this->getRequest();
      $param = $request->getPost();
      $data = $param->toArray();
      if (array_key_exists($field, $data)) {
      $result = 'true';
      $data['last_updated'] = date("Y-m-d H:i:s");
      $autoTransportLeadsTable = $this->getAutoTransportLeadsTable();
      $autoTransportLeadsTable->update($data, array('session_id' => $this->session->userdata('session_id')));
      } else {
      $result = 'false';
      }
      $json = new JsonModel(array('result' => $result));
      $json->setTerminal(true);
      return $json;
      }
      return new ViewModel();
      }

      public function clear_auto() {
      if ($this->hasAccess()) {
      $request = $this->getRequest();
      $param = $request->getPost();
      $data = $param->toArray();
      if (!empty($data['make']) || !empty($data['model']) || !empty($data['year'])) {
      $result = 'true';
      if (!empty($data['make'])) {
      $data['make'] = null;
      }
      if (!empty($data['model'])) {
      $data['model'] = null;
      }
      if (!empty($data['year'])) {
      $data['year'] = null;
      }
      $data['last_updated'] = date("Y-m-d H:i:s");
      $autoTransportLeadsTable = $this->getAutoTransportLeadsTable();
      $autoTransportLeadsTable->update($data, array('session_id' => $this->session->userdata('session_id')));
      } else {
      $result = 'false';
      }
      $json = new JsonModel(array('result' => $result));
      $json->setTerminal(true);
      return $json;
      }
      return new ViewModel();
      }
     */

    public function validate_call() {
        if ($this->hasAccess()) {
            $request = $this->getRequest();
            $phone = $request->getPost('call_phone');
            $filter = new Digits();
            $phone = $filter->filter($phone);
            $result = $this->verify_phone($phone);
            if ($result == 'true') {
                $result = $phone;
                $click_to_call_table = $this->getClickToCallTable();
                $click_to_call_table->insert(
                        array(
                            'session_id' => $this->session->userdata('my_session_id'),
                            'phone_number' => $phone,
                            'date_time' => date("Y-m-d H:i:s")
                        )
                );
                $result = $phone;
            }
            $json = new JsonModel(array('result' => $result));
            $json->setTerminal(true);
            return $json;
        }
        return new ViewModel();
    }

    public function hasActiveSession() {
        $session = $this->getSession();
        return $session->sessionExists();
    }

    public function hasAccess() {
        if ($this->input->is_ajax_request()) {
            return true;
        }
        //$this->notFound();
        return false;
    }

    // code for phone validation for trusted validation
    public function validate_phone($phone) {
        $url = "http://166.78.135.166/validation.php";
        $data = "domain=budgetvanlines.com&api_key=111457&phone=$phone";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);

        curl_close($ch);

        return json_decode($result);

        /* if($response->status == 0)
          return true;
          else
          return false; */
    }

    // Below this are verification of phone and email via xverified. It is turned either on or off via the validate function.



    public function verify_phone($phone) {
        $xverify = $this->phone_has_been_verified_previously($phone);
        $json = $this->validate_phone($phone);
        //var_dump($json);
        if ($json) {
            $data = array(
                'session_id' => $this->session->userdata('my_session_id'),
                'date_time' => date("Y-m-d H:i:s"),
                'phone_number' => $phone,
                'error' => $json->error,
                'status' => $json->status,
                'message' => $json->message,
                'duration' => '1',
                'areacode' => '',
                'prefix' => substr($phone, 0, 3),
                'suffix' => substr($phone, 3, 3),
                'latitude' => '',
                'longitude' => '',
                'extension' => '',
                'city' => '',
                'state' => '',
                'country' => 'US',
                'timezone' => '',
                'timezonecode' => '',
                'exchange_type' => '',
                'phone_type' => '',
                'ran_curl_call' => '1'
            );
        } else {
            $data = array(
                'session_id' => $this->session->userdata('my_session_id'),
                'date_time' => date("Y-m-d H:i:s"),
                'phone_number' => $phone,
                'ran_curl_call' => '0'
            );
        }

        if ($xverify) {
            $this->db->where('id', $xverify->id);
            $this->db->update('xverify_phone', $data);
        } else {
            $this->db->insert('xverify_phone', $data);
        }
        if ($json) {
            //if($json->phone->status == 'invalid' && in_array($json->phone->message,$accepted_message)){
            if ($json->status == 'invalid' && $json->error == '0') {
                return 'false';
            }
        }
        return 'true';
    }

    public function xverify_phone($phone) {
        $service_url = 'http://www.xverify.com/services/phone/verify/';
        $get = '?phone=' . $phone;
        $get.= '&type=json';
        $get.= '&apikey=1000148-DB2ED7A3';
        $get.= '&domain=budgetvanlines.com';
        $get.= '&phonetype=phone';
        $service_url.= $get;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $service_url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);  // Set timeout to 3 seconds
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }

    public function phone_has_been_verified_previously($phone) {
        $this->db->select();
        $this->db->where('phone_number', $phone);
        $result = $this->db->get('xverify_phone')->result();
        return !empty($result) ? $result[0] : false;
    }

    /*
      public function verify_email($email) {
      $xverify = $this->email_has_been_verified_previously($email);
      $xverify_email = $this->getXverifyEmailTable();

      if ($xverify) {
      if ($xverify->ran_curl_call) {
      if ($xverify->status == 'valid') {
      return 'true';
      } else if ($xverify->status == 'invalid') {
      return 'false';
      }
      }
      }
      $json = $this->xverify_email($email);
      if ($json) {
      $data = array(
      'session_id' => $this->session->userdata('session_id'),
      'date_time' => date("Y-m-d H:i:s"),
      'address' => $email,
      'syntax' => ($json->email->syntax ? '1' : '0'),
      'handle' => $json->email->handle,
      'domain' => $json->email->domain,
      'responsecode' => $json->email->responsecode,
      'catch_all' => $json->email->catch_all,
      'social_switch' => $json->email->social_switch,
      'error' => $json->email->error,
      'status' => $json->email->status,
      'message' => $json->email->message,
      'duration' => $json->email->duration,
      'ran_curl_call' => '1'
      );
      } else {
      $data = array(
      'session_id' => $this->session->userdata('session_id'),
      'date_time' => date("Y-m-d H:i:s"),
      'address' => $email,
      'ran_curl_call' => '0'
      );
      }

      if ($xverify) {
      $xverify_email->update($data, array('id' => $xverify->id));
      } else {
      $xverify_email->insert($data);
      }
      if ($json->email->status == 'invalid') {
      return 'false';
      }
      return 'true';
      }

      public function xverify_email($email) {
      $service_url = 'http://www.xverify.com/services/emails/verify/';
      $get = '?email=' . $email;
      $get.= '&type=json';
      $get.= '&apikey=1000148-DB2ED7A3';
      $get.= '&domain=budgetvanlines.com';
      $service_url.= $get;

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HTTPGET, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $service_url);
      curl_setopt($ch, CURLOPT_TIMEOUT, 3);  // Set timeout to 15 seconds
      $response = curl_exec($ch);
      curl_close($ch);

      return json_decode($response);
      }



      public function email_has_been_verified_previously($email) {
      $xverify_email = $this->getXverifyEmailTable();
      $rowset = $xverify_email->select(array('address' => $email));
      $row = $rowset->current();
      return $row;
      }
     */

    public function store_number($phone_number) {

        $this->db->insert('phone_number_log', array(
            'session_id' => $this->session->userdata('my_session_id'),
            'phone_number' => $phone_number,
            'date_time' => date("Y-m-d H:i:s")
                )
        );
    }

    public function xverify_phonecall($phone, $code) {
        $service_url = 'http://www.xverify.com/services/phoneconfirm/placecall/';
        $get = '?phone=' . $phone;
        $get.= '&type=json';
        $get.= '&code=' . $code;
        $get.= '&apikey=1000148-DB2ED7A3';
        $get.= '&domain=budgetvanlines.com';
        $service_url.= $get;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $service_url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);  // Set timeout to 15 seconds
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
