<?php

if (!defined('BASEPATH'))
    die();

class Cron extends Main_Controller {

    public $session_id;
    protected $postmarkKey = 'fd89c308-569e-4ebf-a076-b23f49d24f5d';
    protected $postmarkEmail = 'info@quoterunner.co';
  
    function __construct() {
        parent::__construct();
        $this->load->model('citystate_model');
        $this->load->model('lead_model');
    }

    public function index() {
//        echo $this->postmarkEmail.'::'.$this->postmarkKey;
        exit;
    }

    function sendLeadToEmail() {
    	//exit;
        $to_time = date('Y-m-d H:i:s', strtotime('-2 minute'));
        $from_time = date('Y-m-d H:i:s', strtotime('-24 hour'));
        $sql = "SELECT l.* FROM `lead` AS l WHERE  l.email IS NOT NULL and l.last_updated <= '$to_time'  and l.last_updated >= '$from_time' and ( phone is null or phone = 0 ) and sent_mail = 0 order by 1 desc";
        echo $sql;
        $results = $this->db->query($sql)->result();
        $this->load->library('Postmark');
        $postmark = new Postmark($this->postmarkKey, $this->postmarkEmail);

        foreach ($results as $row) {
	
//             $phone_score_sql = "SELECT * FROM targus where session_id = '" . $row->session_id . "' and phone_number = '" . $row->phone . "' and phone_score < 50 and phone_score not in (35, 40, 45);";
//             $phone_result = $this->db->query($phone_score_sql)->result();
        
//             $mail_sql = "SELECT * FROM `sent_mail` where session_id ='" . $row->session_id . "'";
// 	    $mail_results = $this->db->query($mail_sql)->result();
	    //strpos($Lead->email, '@test.com') !== false
            //if ((empty($row->phone) && strpos($row->email, '@test.com') === false && count($mail_results) == 0) ) {
            if ((empty($row->phone) && strpos($row->email, '@test.com') === false )) {
//            if ((empty($row->phone))) {
//               var_dump('hi');
				echo $row->email;
                $row_from_zip = $this->lead_model->getLeadMetaByKey('from_zip_code',$row->lead_id);
                $row_to_zip = $this->lead_model->getLeadMetaByKey('to_zip_code',$row->lead_id);
                $from = $this->citystate_model->cityStateByZipcode($row_from_zip[0]->value);
                $to = $this->citystate_model->cityStateByZipcode($row_to_zip[0]->value);
               
	
                $from_state = isset($from->state) ? $from->state : NULL;
                $from_city = isset($from->city_name) ? $from->city_name : NULL;
                $to_state = isset($to->state) ? $to->state : NULL;
                $to_city = isset($to->city_name) ? $to->city_name : NULL;

                $utm_source = $this->lead_model->getLeadMetaByKey('utm_source',$row->lead_id);

                if ($utm_source[0]->utm_source == 'goog') {
                    $origin = 'QR(G)';
                } elseif ($utm_source[0]->utm_source == 'gemini') {
                    $origin = 'QR(GEM)';
                } elseif ($utm_source[0]->utm_source == 'bing') {
                    $origin = 'QR(Y)';
                } else {
                    $origin = 'QR';
                }

//                 $mail_sql = "INSERT INTO `sent_mail` (`session_id`,`sent_mail`) VALUES ('" . $row->session_id . "',1);";
//                 $mail_results = $this->db->query($mail_sql);
               
                $this->lead_model->update(array('sent_mail' => 1),$row->session_id);
                // send email using POSTMARK
                
                $row_move_date = $this->lead_model->getLeadMetaByKey('move_date',$row->lead_id);
                $row_move_size = $this->lead_model->getLeadMetaByKey('move_size',$row->lead_id);
               
                $urldata = base_url().'quotes?plp_token=' . $row->session_id . '&utm_source=Email&utm_medium=qr';
                $view =  array(
                    'urldata' => $urldata,
                    'movedate' => date('m/d/Y', strtotime($row_move_date[0]->value)),
                    'movesize' => ucwords($row_move_size[0]->value),
                    'zipcode' => $row_from_zip[0]->value,
                    'email' => $row->email,
                    'name' => ucwords($row->first_name),
                );
                $content = $this->load->view('emailtemplates/local-move-email',$view,true);
              echo $content;
              
                $sent = $postmark->to($row->email)
                //$sent = $postmark->to('bhavesh@equatemedia.com')
                        	->bcc('bhavesh@equatemedia.com')
                        ->subject('Companies that can service your move')
                        ->html_message($content)
                        ->send();

            // exit;
               
            }
        }

       // $lead_table->getAdapter()->getDriver()->getConnection()->disconnect();
        exit;
    }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
