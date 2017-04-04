<?php if (!defined('BASEPATH')) die();
class Faq extends Main_Controller {

   public function index()
	{
       $this->data['menu'] = 'faq';
        $this->load->view('include/header-organic-1',$this->data);
      $this->load->view('view_faq-1');
      $this->load->view('include/footer-organic-1');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
