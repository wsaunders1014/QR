<?php if (!defined('BASEPATH')) die();
class Privacy_Policy extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('view_privacy_policy');
      $this->load->view('include/footer');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
