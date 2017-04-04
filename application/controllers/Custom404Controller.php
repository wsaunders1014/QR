<?php
class Custom404Controller extends CI_Controller  {
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->output->set_status_header('404');

        // Make sure you actually have some view file named 404.php
        $this->load->view('page/not_found');
    }
}