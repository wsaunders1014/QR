<?php if (!defined('BASEPATH')) die();
class Roofing extends Main_Controller {

	
   public function index()
	{
	
	  
	  $data['include_js'] = 'roofing.js';
	  $this->data['hide_header'] = TRUE;
	  $this->data['phone'] = '(307)-200-4898';
	  $this->load->view('include/header',$this->data);
      $this->load->view('view_roofing',$data);
      $this->load->view('include/footer');
	}
   
	public function thank_you()
	{
	
		$this->load->library('xmlrpc');
		$this->load->helper('security');
		$this->load->model('lead_model');	 
		//$this->xmlrpc->set_debug(TRUE);

		$headers = 'From: notifier@quoterunner.co' . "\r\n" .
			    'Reply-To: no-reply@quoterunner.co' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
		
		@mail('disha@equatemedia.com', 'roofing lead received', 'email: ' . $this->input->post('email'), $headers);
		
		
		$this->data['include_js'] = 'roofing.js';
		
		
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
	 	$data['type']		= 'roofing';
	 	$data['account_id']		= '1000';
	 	
	 	$meta = array();
	 	$meta['roof_size']	= $this->input->post('roof_size');
	 	$meta['roof_type']	= $this->input->post('roof_type');
	 	$meta['zip_code']	= $this->input->post('zip_code');
	 	
	 	
	 	//Google Adwords variables
	 	$meta['utm_source']		= $this->input->post('utm_source');
	 	$meta['utm_medium']		= $this->input->post('utm_medium');
	 	$meta['utm_campaign']	= $this->input->post('utm_campaign');
	 	$meta['ag']				= $this->input->post('ag');
	 	$meta['qs']				= $this->input->post('qs');
	 	$meta['network']		= $this->input->post('network');
	 	$meta['device']			= $this->input->post('device');
	 	$meta['adid']			= $this->input->post('adid');
	 	
	 	

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
				//sucessful, do nothing
			}
			elseif( $response['response'] == 'duplicate lead' )
			{
				mail('disha@equatemedia.com', 'duplicate lead response', 
				"Post: " . serialize($_POST) . " \n Response: " . serialize($response));
				
			}
			else
			{
				mail('disha@equatemedia.com', 'bad lead response', 
				"Post: " . serialize($_POST) . " \n Response: " . serialize($response));
			}
			
		}
		$this->load->view('include/header');
		$this->load->view('view_roofing_thank_you.php', $this->data);
		$this->load->view('include/footer');
				
				
	}
}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
