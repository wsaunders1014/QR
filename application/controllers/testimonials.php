<?php if (!defined('BASEPATH')) die();
class Testimonials extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('view_testimonials');
      $this->load->view('include/footer');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
