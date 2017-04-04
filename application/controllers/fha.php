<?php if (!defined('BASEPATH')) die();
class FHA extends Main_Controller {

	
   public function index()
	{
	  
	  $data['include_js'] = 'fha.js';
	  $this->data['hide_header'] = TRUE;
	  $this->load->view('include/header',$this->data);
      $this->load->view('view_fha',$data);
      $this->load->view('include/footer');
	}
   
		public function thank_you()
	{
	
		//$this->data['include_js'] = 'fha.js';
		$this->load->library('xmlrpc');
		$this->load->helper('security');
		$this->load->model('lead_model');	 
		//$this->xmlrpc->set_debug(TRUE);

	 
		$this->xmlrpc->server('http://url/', 80);
		$this->xmlrpc->method('mortgage');

		    
        $data = array();
	 	$data['first_name']	= $this->input->post('first_name');
	 	$data['last_name']	= $this->input->post('last_name');
	 	$data['address']	= "";
	 	$data['phone']		= $this->input->post('phone');
	 	$data['email']		= $this->input->post('email');
	 	$data['IP']			= $this->input->ip_address();
	 	$data['user_agent']	= $this->input->user_agent();
	 	$data['type']		= 'solar';
	 	$meta = array();
	 	/*
	 	$meta['zip_code']			= $this->input->post('zip_code');
	 	$meta['electricity_bill']	= $this->input->post('electricity_bill');
	 	$meta['is_owner']			= $this->input->post('is_owner');
	 	$meta['covered_by_shade']	= $this->input->post('covered_by_shade');
	 	
	 	/*
		 	utm_source - platform/advertisier (google,bing,facebook etc)
			utm_medium - what property (gfla, quoterunner etc)
			utm_campaign - campaign name
			ag - adgroup name (optional)
			qs - search query
			network - if they clicked the ad from google's search partners
			device - what device the came in on
			adid - what ad they clicked on (optional) 
	 	*/

	 	
	  	$lead_id = $this->lead_model->insert($data, $meta);
	 	$request = array(array(array_merge($data, $meta),'struct'));
		
		$this->xmlrpc->request($request);
		if ( ! $this->xmlrpc->send_request())
		{
			//$this->xmlrpc->display_error();
			mail('disha@equatemedia.com', 'Could not submit', serialize($_POST));
		}
		else
		{
			$response = $this->xmlrpc->display_response();
			if( $response['response'] == 'successful' )
			{
				$this->load->view('include/header');
				$this->load->view('view_fha_thank_you',$this->data);
				$this->load->view('include/footer');
			}
			else
			{
				mail('disha@equatemedia.com', 'did not get successful response', serialize($_POST));
			}
			
		}
	}
}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
