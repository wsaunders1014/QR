	<?php if (!defined('BASEPATH')) die();
class Moving_dev extends Main_Controller {

   public function index()
	{
	  $this->data['include_js'] = 'moving2.js';
	  $this->data['hide_header'] = TRUE;
	  
	  $this->data['title'] = "QuoteRunner - Long Distance Moving Quote, Free & Easy";
	  $this->data['meta_description'] = "Get up to five free long distance moving quotes, free and easy.";
	  $this->data['meta_keywords'] = "moving, quote, free, easy, long, distance";
	  $this->data['alternate'] = site_url('moving/mobile');
	  
	  $this->load->model('blog_model');
	  $this->data['blog_roll'] = $this->blog_model->get_blog_roll('moving');
	  
	  
      $this->load->view('include/header2_split_test.php',$this->data);
      $this->load->view('view_moving2',$this->data);
      $this->load->view('include/footer2');
	}
	
	
	public function interstate()
	{
	  $this->data['include_js'] = 'moving2x.js';
	  $this->data['hide_header'] = TRUE;
	  
	  $this->data['title'] = "QuoteRunner - Long Distance Moving Quote, Free & Easy";
	  $this->data['meta_description'] = "Get up to five free long distance moving quotes, free and easy.";
	  $this->data['meta_keywords'] = "moving, quote, free, easy, long, distance";
	  $this->data['alternate'] = site_url('moving/mobile');
	  
	  $this->load->model('blog_model');
	  $this->data['blog_roll'] = $this->blog_model->get_blog_roll('moving');
	  
	  
      $this->load->view('include/header2_split_test.php',$this->data);
      $this->load->view('view_moving2',$this->data);
      $this->load->view('include/footer2');
	}
	
	
	
	public function exclusive()
	{
	  $this->data['include_js'] = 'moving_exclusive.js';
	  $this->data['hide_header'] = TRUE;
	  
	  $this->data['title'] = "QuoteRunner - Long Distance Moving Quote, Free & Easy";
	  $this->data['meta_description'] = "Get up to five free long distance moving quotes, free and easy.";
	  $this->data['meta_keywords'] = "moving, quote, free, easy, long, distance";
	  $this->data['alternate'] = site_url('moving/mobile');
	  
	  $this->load->model('blog_model');
	  $this->data['blog_roll'] = $this->blog_model->get_blog_roll('moving');
	  
	  
      $this->load->view('include/header2.php',$this->data);
      $this->load->view('view_moving_exclusive',$this->data);
      $this->load->view('include/footer2');
	}
	
	
	
	
	public function desktop()
	{
	  mail('disha@equatemedia.com', 'notify', 'someone landed on moving/desktop');
      redirect('/moving/', 'refresh');
	}
	
	
	public function mobile()
	{
		$this->load->library('minify'); 
		
	 	$this->data['include_js'] = 'moving.mobile.js';
	 	$this->data['hide_header'] = TRUE;
	 	$this->data['canocial'] = site_url('moving');
	  
	 	$this->data['title'] = "QuoteRunner - Long Distance Moving Quote, Free & Easy";
	 	$this->data['meta_description'] = "Get up to five free long distance moving quotes, free and easy.";
	 	$this->data['meta_keywords'] = "moving, quote, free, easy, long, distance";
	  
	 	$this->load->view('include/header.mobile-3.php',$this->data);
	 	$this->load->view('view_moving.mobile-3.php',$this->data);
	 	$this->load->view('include/footer.mobile-3.php');
      
	}
   
	public function thank_you()
	{
	
		
		$this->load->library('xmlrpc');
		$this->load->helper('security');
		$this->load->model('lead_model');	 
		//$this->xmlrpc->set_debug(TRUE);

	
		
		
		$this->data['include_js'] = 'moving.js';
		
		
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
	 	$data['type']		= 'moving';
	 	$data['account_id']		= '1000';
	 	
	 	$meta = array();
	 	$meta['from_zip_code']	= $this->input->post('from_zip_code');
	 	$meta['to_zip_code']	= $this->input->post('to_zip_code');
	 	$meta['move_size']		= $this->input->post('move_size');
	 	$meta['move_date']		= $this->input->post('move_date');
	 	
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
	 	$meta['gclid']			= $this->input->post('gclid');
	 	
	  	$lead_id = $this->lead_model->insert($data, $meta);
	  	$data['lead_id'] = $lead_id;
	 	$request = array_merge($data, $meta);
// 		echo "<pre>";
// 		print_r($request);
// 		exit;
		$this->submitToMatrix($request);
// 		$this->xmlrpc->request($request);
// 		if ( ! $this->xmlrpc->send_request())
// 		{
// 			//$this->xmlrpc->display_error();
			 
			
// 			$this->load->library('email');
// 			$this->email->from('disha@equatemedia.com', "QuoteRunner Robot");
// 			$this->email->to('disha@equatemedia.com'); 
// 			$this->email->cc('bhavesh@equatemedia.com');
// 			$this->email->subject('Problem submitting lead');
// 			$this->email->message("Was not able to submit lead, debugging data ... " . serialize($_POST));	
// 			$this->email->send();
		   
		   
// 		}
// 		else
// 		{
// 			$response = $this->xmlrpc->display_response();
// 			if( $response['response'] == 'successful' )
// 			{
// 				//sucessful, do nothing
// 			}
// 			elseif( $response['response'] == 'duplicate lead' )
// 			{
				
// 			}
// 			else
// 			{
				
// 				if ($this->input->server('REQUEST_METHOD') == 'POST')
// 				{
					 					
// 					$this->load->library('email');
// 					$this->email->from('disha@equatemedia.com', "QuoteRunner Robot");
// 					$this->email->to('disha@equatemedia.com'); 
// 					$this->email->cc('bhavesh@equatemedia.com');
// 					$this->email->subject('Problem submitting lead');
// 					$this->email->message("Was not able to submit lead, debugging data ... " . "Post: " . serialize($_POST) . "\n SERVER VAR" . serialize($_SERVER) . " \n Response: " . serialize($response));	
// 					$this->email->send();
					
					
// 				}
				
				
// 			}
			
// 		}
		$this->load->view('include/header.php');
		$this->load->view('view_moving_thank_you', $this->data);
		$this->load->view('include/footer');	
	}
	
	private function submitToMatrix($data) {
		//print_r($data);
		$row = $data;
	
		if(!empty($row['utm_source'])){
		
			if($row['utm_source'] == 'goog'){
				$origin = 'QR(G)';
			}elseif($row['utm_source'] == 'bing'){
				$origin = 'QR(Y)';
			}elseif($row['utm_source'] == 'bing-b'){
				$origin = 'QR(Yn)';
			}elseif($row['utm_source'] == 'AdRoll'){
				$origin = 'QR(AR)';
			}elseif($row['utm_source'] == 'gemini'){
				$origin = 'QR(GEM)';
			}elseif($row['utm_source'] == 'FB'){
				$origin = 'QR(FB)';
			}elseif($row['utm_source'] == 'Email'){
				$origin = 'QR(E)';
			}else{
				$origin = 'QR';
			}
		}else{
			$origin = 'QR';
			$row2 = array(
					'qs' => '',
					'mt' => '',
					'bmt' => '',
					'oii' => '',
					'ai' => '',
					'utm_source' => '',
					'utm_medium' => '',
					'utm_campaign' => '',
					'utm_content' => '',
					'network' => '',
					'domain' => '',
					'ag' => '',
					'device' => '',
					'os' => '',
					'gclid' => ''
			);
			$row = array_merge($row, $row2);
		}
		$landing_page = isset($row['source']) ? $row['source'] : '';
// 		echo "<Pre>";
// 		print_r($row);
		//exit;
		$xml = "<?xml version='1.0' standalone='yes'?>\n";
		$xml .= "<lead>\n";
		$xml .= "	<affiliate>Charlie</affiliate>\n";
		$xml .= "	<origin>".$origin."</origin>\n";
		$xml .= "	<landing_page>".$landing_page."</landing_page>\n";
		$xml .= "	<qs>".urlencode($row['qs'])."</qs>\n";
		//$xml .= "	<mt>".$utm_result['mt']."</mt>\n";
		//$xml .= "	<bmt>".$utm_result['bmt']."</bmt>\n";
		//$xml .= "	<oii>".$utm_result['oii']."</oii>\n";
		//$xml .= "	<ai>".$utm_result['ai']."</ai>\n";
		$xml .= "	<ag>".$row['ag']."</ag>\n";
		$xml .= "	<network>".$row['network']."</network>\n";
		//$xml .= "	<domain>".$utm_result['domain']."</domain>\n";
		$xml .= "	<search_engine>".$row['utm_source']."</search_engine>\n";
		$xml .= "	<campaign>".$row['utm_campaign']."</campaign>\n";
		$xml .= "       <device>".$row['device']."</device>\n";
		//$xml .= "       <os>".$utm_result['os']."</os>\n";
		$xml .= "	<name>".$row['first_name']." ".$row['last_name']."</name>\n";
		$xml .= "	<email>".$row['email']."</email>\n";
		$xml .= "	<from_zip>".$row['from_zip_code']."</from_zip>\n";
		$xml .= "	<to_zip>".$row['to_zip_code']."</to_zip>\n";
		$xml .= "	<phone>".$row['phone']."</phone>\n";
		$xml .= "	<phone_ext></phone_ext>\n";
		//$xml .= "	<xvr_phone>".$xvr_phone."</xvr_phone>\n";
		//$xml .= "	<xvr_phone_city>".$xvr_city."</xvr_phone_city>\n";
		//$xml .= "	<xvr_phone_state>".$xvr_state."</xvr_phone_state>\n";
		//$xml .= "	<xvr_email>".$xvr_email."</xvr_email>\n";
		$xml .= "	<phone2></phone2>\n";
		$xml .= "	<move_size>".$row['move_size']."</move_size>\n";
		$xml .= "	<IP>".$row['IP']."</IP>\n";
		$xml .= "	<GCLID>".$row['gclid']."</GCLID>\n";
		$xml .= "	<move_date>".date('Y-m-d',strtotime($row['move_date']))."</move_date>\n";
		$xml .= "</lead>\n";
		//echo $xml;
		//exit;
		
		$matrix_response = $this->curl_submit($xml,$row['lead_id']);
		//print_r($matrix_response);
	}
	
	private function curl_submit($xml,$lead_id)
	{
		$ch = curl_init("https://submit.bvlgw.com/submit.php");
	
		curl_setopt_array(
		$ch,
		array(
		CURLOPT_HEADER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_CONNECTTIMEOUT => 40,
		CURLOPT_HTTPAUTH => CURLAUTH_DIGEST,
		CURLOPT_USERPWD => "fmq:e\$6ZA)D1x]:Fr8?6A^{/\$\$}?oOhp1'x!_fN=u5Hb_D0u\$)`E8=xuh\\\\zj+ofH|E",
		CURLOPT_POSTFIELDS => array('xml' => $xml)
		)
		);
	
		return $this->store_response(curl_exec($ch),$lead_id);
	}
	
	private function store_response($response,$lead_id)
	{
		//echo $response;
		$date = date("Y-m-d H:i:s");
		//$stmt = $this->mysql->prepare("insert into matrix_response (lead_id, matrix_lead_id, is_valid, error, raw_xml, date_time) values (?,?,?,?,?,?)");
		$matrix_lead_id = '0';
		$error = '';
		if(!empty($response)){
			$xml = simplexml_load_string(trim($response));
			if(isset($xml->lead_id)){
				$matrix_lead_id = $xml->lead_id;
			}else{
				$error = $xml->error;
			}
			$valid = $xml->valid;
		}else{
			$valid = '0';
			$response = 'bad xml';
			
		}
		$data = array();
		$data['lead_id'] = $lead_id;
		$data['matrix_lead_id'] = (int)$matrix_lead_id;
		$data['is_valid'] = $valid;
		$data['error'] = (string) $error;
		$data['raw_xml'] = (string) $response;
		$data['date_time'] = $date;
		$this->load->model('matrix_model');
		$this->matrix_model->insert($data);
		
		return array(
				'matrix_lead_id' => $matrix_lead_id,
				'time_submitted_to_matrix' => date("Y-m-d H:i:s")
		);
	}
}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
