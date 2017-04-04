<?php

if (!defined('BASEPATH'))
    die();

class Contact extends Main_Controller {

    public function index() {
        $this->load->helper('form');
        $this->data['menu'] = 'contact';
        $this->data['js'] = array('select2.js', 'contact.js');
        $this->load->view('include/header-organic-1', $this->data);
        $this->load->view('view_contact-1');
        $this->load->view('include/footer-organic-1', $this->data);
    }

    public function submit() {
        $name = $this->input->post('your_name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $phone_number = $this->input->post('phone_number');
        $company_name = $this->input->post('company_name');
        $type = $this->input->post('type');
        $message = '';
        if ($phone_number) {
            $message .= 'Phone : ' . $phone_number . "<br />";
        }
        if ($email) {
            $message .= 'Email : ' . $email . "<br />";
        }
        if ($name) {
            $message .= 'Name : ' . $name . "<br />";
        }
        if ($company_name) {
            $message .= 'Company Name : ' . $company_name . "<br />";
            $subject = "Business Inquiry";
        }

        if ($type == 'agents')
            $subject = 'Sales Inquiry';
        else if($type == 'home')
        	$subject  = "Business Inquiry"; 
        
        $message .= $this->input->post('your_message');
       // exit;

        // $this->load->library('email');
//	   $this->email->from('disha@equatemedia.com', "QuoteRunner: " . $name);
//	   $this->email->to('disha@equatemedia.com'); 
//	   $this->email->subject($subject);
//	   $this->email->message($message);	
//	   $this->email->send();
//           echo $this->config->item('postmarkKey');
//           echo $this->config->item('postmarkEmail');exit;
        $this->load->library('Postmark');
        $postmark = new Postmark($this->config->item('postmarkKey'), $this->config->item('postmarkEmail'));
//            $sent = $postmark->to($row->email)
        $sent = $postmark->to('moverleads@quoterunner.co')
       // $sent = $postmark->to('bhavesh@equatemedia.com')
               // ->bcc('bhavesh@equatemedia.com')
                ->subject($subject)
                ->html_message($message)
                ->send();
        //var_dump($sent);
        $sent = true;
        if($sent)
            echo "true";
        else 
            echo "false";
//        $this->session->set_flashdata('message', 'Thank You for your form submission. Allow 24h response time.');
//        if (isset($type) && $type == 'partner')
//            redirect('/partners/service-partners', 'refresh');
//        elseif (isset($type) && $type == 'home')
//            redirect('/', 'refresh');
//        elseif (isset($type) && $type == 'agents')
//            redirect('/partners/agents', 'refresh');
//        else
//            redirect('/contact/', 'refresh');
    }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
