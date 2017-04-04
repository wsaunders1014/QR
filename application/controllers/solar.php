<?php if (!defined('BASEPATH')) die();
class Solar extends Main_Controller {

	
   public function index()
	{
	
	  $data['include_js'] = 'solar.js';
	  $this->data['hide_header'] = TRUE;
	  
	  
	  $this->data['title'] = "QuoteRunner - Go solar and save with todays rebates";
	  $this->data['meta_description'] = "Lease / Finance for 0$ Down, Save 40-60% with todays rebates.";
	  $this->data['meta_keywords'] = "solar, quote, free, cost, rebate, save";
	  
	  $this->load->view('include/header',$this->data);
      $this->load->view('view_solar',$data);
      $this->load->view('include/footer');
	
	
	
	}
   
	public function thank_you()
	{
	
		$this->data['include_js'] = 'solar.js';
		$this->load->library('xmlrpc');
		$this->load->helper('security');
		$this->load->model('lead_model');	 
		//$this->xmlrpc->set_debug(TRUE);

	 
		$this->xmlrpc->server('http://url/', 80);
		$this->xmlrpc->method('lead');

		    
        $data = array();
	 	$data['first_name']	= $this->input->post('first_name');
	 	$data['last_name']	= $this->input->post('last_name');
	 	$data['address']	= "";
	 	$data['phone']		= $this->input->post('phone');
	 	$data['email']		= $this->input->post('email');
	 	$data['IP']			= $this->input->ip_address();
	 	$data['user_agent']	= $this->input->user_agent();
	 	$data['type']		= 'solar';
	 
	 	$data['account_id']		= '1000';
	 	
	 	$meta = array();
	 	$meta['zip_code']			= $this->input->post('zip_code');
	 	$meta['electricity_bill']	= $this->input->post('electricity_bill');
	 	$meta['is_owner']			= $this->input->post('is_owner');
	 	$meta['covered_by_shade']	= $this->input->post('covered_by_shade');

	 	//Google Adwords variables
	 	$meta['utm_source']		= $this->input->post('utm_source');
	 	$meta['utm_medium']		= $this->input->post('utm_medium');
	 	$meta['utm_campaign']	= $this->input->post('utm_campaign');
	 	$meta['ag']				= $this->input->post('ag');
	 	$meta['qs']				= $this->input->post('qs');
	 	$meta['network']		= $this->input->post('network');
	 	$meta['device']			= $this->input->post('device');
	 	$meta['adid']			= $this->input->post('adid');
	 	$meta['source']			= $this->input->post('source');

	 	
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
				
			}
			else
			{
				mail('disha@equatemedia.com', 'did not get successful response', serialize($_POST));
			}
			
		}
		
		$this->load->view('include/header');
		$this->load->view('view_solar_thank_you',$this->data);
		$this->load->view('include/footer');
				
				
	}
}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
