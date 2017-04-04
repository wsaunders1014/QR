<?php

if (!defined('BASEPATH'))
    die();

class Quotes extends Main_Controller {

    public $session_id;

    function __construct() {
        parent::__construct();
        $token = $this->input->get('plp_token');
        if (!empty($token)) {
            $this->load->model('lead_model');
            $Lead = $this->lead_model->getLead($token);
            if (empty($Lead))
                redirect('/moving');
            $this->session->set_userdata("my_session_id", $token);
            $this->session_id = $token;
        } else {
            redirect('/moving');
        }
    }

    public function index() {
        $this->load->model('citystate_model');
        $Lead = $this->lead_model->getLead($this->session_id);
        $meta = array();
        $meta['source'] = '/quotes';

        foreach ($meta as $key => $value) {
            if(!empty($value))
                $this->lead_model->updateLeadMeta($key, $value, $Lead[0]->lead_id);
        }
        $Meta = $this->lead_model->getLeadMeta($Lead[0]->lead_id);
        $this->data = (array) $Lead[0];
        foreach ($Meta as $m) {
            $this->data[$m->key] = $m->value;
        }
        $zipfrom = $this->citystate_model->cityStateByZipcode($this->data['from_zip_code']);
        $zipto = $this->citystate_model->cityStateByZipcode($this->data['to_zip_code']);

        $this->data['from_city'] = ucwords(strtolower($zipfrom->city_name));
        $this->data['from_state'] = $zipfrom->state;
        $this->data['to_city'] = ucwords(strtolower($zipto->city_name));
        $this->data['to_state'] = $zipto->state;
        $this->data['source'] = '/quotes';
       
//         echo "<pre>";
//         //print_r($Lead);
//           print_r($this->data);
//         echo "</pre>";
        $this->load->view('include/quotes-header-1.php',$this->data);
        $this->load->view('view_quotes-2.php',$this->data);
        $this->load->view('include/quotes-footer-1.php');
        //exit;
    }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
