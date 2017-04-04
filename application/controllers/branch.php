<?php

if (!defined('BASEPATH'))
    die();

class Branch extends Main_Controller {

    function __construct() {
        parent::__construct();
        $my_session_id = $this->session->userdata('my_session_id');
        if(empty($my_session_id)) {
            $uniqueId = uniqid($this->input->ip_address().$this->input->user_agent(), TRUE);
            $this->session->set_userdata("my_session_id", md5($uniqueId));
        }
    }

    public function index() {

        $session_id = $this->session->userdata('my_session_id');
        $this->db->select('phone');
        $row = $this->db->get_where('lead', array('session_id' => $session_id))->result();
        $phone_number = isset($row[0]->phone) ? $row[0]->phone : '';
        $branchexits = $this->db->get_where('branch_source', array('session_id' => $session_id))->result();
        //$branchexits = $this->getBranchSourceTable()->getBranchdata($session_id); 
        $source = $this->input->post('source');
        if (count($branchexits) > 0) {
            $branchid = $branchexits[0]->id;
            $gbranchid = $branchexits[0]->branch_id;
            $dataupdate['phone_number'] = $phone_number;
            $this->db->update('branch_source', $dataupdate, array('session_id' => $session_id));
        } else {
            $data = array(
                'session_id' => $session_id,
                'phone_number' => $phone_number,
                'source' => !empty($source) ? $source :'QR',
                'created_date' => date('Y-m-d H:i:s'),
            );
            $this->db->insert('branch_source', $data);
            $branchid = $this->db->insert_id();
            $gbranchid = "b_" . $branchid;
        }

        $data = array('app_id' => '292316516043478000', 'data' => array('match_id' => '', 'branch_id' => $session_id, 'branch_type' => '0', 'site_type' => 'b', '$desktop_url' => 'https://imover.com/', '$ios_url' => 'https://itunes.apple.com/us/app/imover/id638087128?ls=1&mt=8', '$android_url' => 'https://play.google.com/store/apps/details?id=com.imover'));
        $data_string = json_encode($data);

        $url = 'https://api.branch.io/v1/url';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );

        $result = curl_exec($ch);
        curl_close($ch);
        $finalresult = json_decode($result);
        $branchurl = $finalresult->url;
        $data = array(
            'branch_id' => $gbranchid,
            'branch_url' => $branchurl,
        );
        $result = $this->db->update('branch_source', $data, array('id' => $branchid));

        /** Store Data in Imover * */
        if (count($branchexits) > 0) {
            $updatedata = 'branch_id=' . $gbranchid . '&session_id=' . $session_id . '&branch_url=' . $branchurl . '&phone_number=' . $phone_number . '&flag=update';
        } else {
            $updatedata = 'branch_id=' . $gbranchid . '&session_id=' . $session_id . '&branch_url=' . $branchurl . '&phone_number=' . $phone_number . '&flag=insert&site_type=QR';
        }

        $urlbranch = 'https://imover.com/branchupdate.php';
        $ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch1, CURLOPT_URL, $urlbranch);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $updatedata);
        $resultdata = curl_exec($ch1);
        curl_close($ch1);

        /** End Data in Imover * */
        echo $branchurl;
        exit;
    }

    public function branchupdate() {
        $app_invitation_id = $_REQUEST['app_invitation_id'];
        $session_id = $_REQUEST['session_id'];
        $data = array(
            'imover_id' => $app_invitation_id,
        );
        $result = $this->db->update('branch_source', $data, array('session_id' => $session_id));
        // send request to the matrix

        $branch = $this->db->get_where('branch_source', array('session_id' => $session_id))->result();
        $branch = !empty($branch) ? $branch : null;
        $imover_id = isset($branch->imover_id) ? $branch->imover_id : '';

        $this->db->select('matrix_response.matrix_lead_id');
        $this->db->from('lead');
        $this->db->join('matrix_response', 'lead.lead_id = matrix_response.lead_id');
        $this->db->where('lead.session_id', $session_id);
        $this->db->where('matrix_response.matrix_lead_id >', 0);
        $leadArr = $this->db->get()->result_array();

        $matrix_id = !empty($leadArr) ? $leadArr[0]['matrix_lead_id'] : 0;
        if ($matrix_id > 0) {
            $urlbranch = 'http://submit.bvlgw.com/imover/submit.php?lead_id=' . $matrix_id . '&imover_id=' . $imover_id;
            //echo $urlbranch;exit;
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch1, CURLOPT_URL, $urlbranch);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            $resultdata = curl_exec($ch1);
            // print_r($resultdata);
            curl_close($ch1);
        }
        echo $updateid;
        exit;
    }

}

?>