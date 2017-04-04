<?php

if (!defined('BASEPATH'))
    die();

class Partners extends Main_Controller {

    public function service_partners() {
        $this->data['menu'] = 'partners';
        $this->data['js'] = array('select2.js', 'contact.js');
        $this->load->view('include/header-organic-1', $this->data);
        $this->load->view('view_service_partners-1');
        $this->load->view('include/footer-organic-1', $this->data);
    }

    public function agents() {
        $this->data['menu'] = 'agents';
        $this->data['js'] = array('agents.js');
        $this->load->view('include/header-organic-1', $this->data);
        $this->load->view('view_agents-1');
        $this->load->view('include/footer-organic-1', $this->data);
    }
    

    }

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
