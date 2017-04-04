<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index()
	{
		$this->load->vars(array('frontpage' => TRUE));
                $this->data['js'] = array('home.js');
		$this->load->view('include/header-organic-1');
		$this->load->view('view_frontpage-1');
		$this->load->view('include/footer-organic-1',$this->data);
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
