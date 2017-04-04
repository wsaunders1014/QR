	<?php if (!defined('BASEPATH')) die();
class Moving extends Main_Controller {
     function __construct() {
        parent::__construct();
        $my_session_id = $this->session->userdata('my_session_id');
        if(empty($my_session_id)) {
            $uniqueId = uniqid($this->input->ip_address().$this->input->user_agent(), TRUE);
            $this->session->set_userdata("my_session_id", md5($uniqueId));
        }
       
    }
   public function index()
	{
        $this->load->library('Mobile_Detect');
        $detect = new Mobile_Detect();
        $session_id = $this->session->userdata('my_session_id');
        $this->db->select('lead_id');
        $leadResult = $this->db->get_where('lead',array('session_id' => $session_id))->result();
        if (empty($leadResult)) {
            
            $leadData = array();
            $leadData['session_id'] = $session_id;
            $leadData['IP'] = $this->input->ip_address();
            $leadData['user_agent'] = $this->input->user_agent();
            $leadData['type'] = 'moving';
            $leadData['account_id'] = '1000';
            $leadData['received_timestamp'] =  date('Y-m-d H:i:s');
            $this->db->insert('lead', $leadData);
            $lead_id = $this->db->insert_id();
                   
            $meta = array();
            $meta['utm_source'] = $this->input->get('utm_source');
            $meta['utm_medium'] = $this->input->get('utm_medium');
            $meta['utm_campaign'] = $this->input->get('utm_campaign');
            $meta['ag'] = $this->input->get('ag');
            $meta['qs'] = $this->input->get('qs');
            $meta['network'] = $this->input->get('network');
            $meta['device'] = $this->input->get('device');
            $meta['adid'] = $this->input->get('adid');
            $meta['source'] = $this->input->get('source');
            $meta['gclid'] = $this->input->get('gclid');
            $meta['source'] = '/moving/desktop';

            $this->load->model('lead_model');
            foreach ($meta as $key => $value) {
                if(!empty($value) && $lead_id > 0)
                    $this->lead_model->updateLeadMeta($key, $value, $lead_id);
            }
        }
        if ( ( $detect->isMobile() || $detect->isAndroidOS() ) && ( $detect->isTablet() == false )) {
            $qs = $_SERVER['QUERY_STRING'];
            header("Location: " . $this->config->item('base_url') . "moving/mobile?$qs");
            exit;
        }
	  $this->data['include_js'] = 'moving2.js';
	  $this->data['hide_header'] = TRUE;
	  
	  $this->data['title'] = "QuoteRunner - Long Distance Moving Quote, Free & Easy";
	  $this->data['meta_description'] = "Get up to five free long distance moving quotes, free and easy.";
	  $this->data['meta_keywords'] = "moving, quote, free, easy, long, distance";
	  $this->data['alternate'] = site_url('moving/mobile');
	  
	  $this->load->model('blog_model');
	  $this->data['blog_roll'] = $this->blog_model->get_blog_roll('moving');
	  
	  
      $this->load->view('include/header-2.php',$this->data);
      $this->load->view('view_moving-2',$this->data);
      $this->load->view('include/footer-2.php');
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
                $this->load->model('lead_model');
		
	 	$this->data['include_js'] = 'moving.mobile.js';
	 	$this->data['hide_header'] = TRUE;
	 	$this->data['canocial'] = site_url('moving');
	  
	 	$this->data['title'] = "QuoteRunner - Long Distance Moving Quote, Free & Easy";
	 	$this->data['meta_description'] = "Get up to five free long distance moving quotes, free and easy.";
	 	$this->data['meta_keywords'] = "moving, quote, free, easy, long, distance";
	  // OLD SITE
// 	 	$this->load->view('include/header.mobile.php',$this->data);
// 	 	$this->load->view('view_moving.mobile.php',$this->data);
// 	 	$this->load->view('include/footer.mobile.php');
	 		
	 	 // NEW SITE
                $session_id = $this->session->userdata('my_session_id');
                $this->db->select('lead_id');
                $leadResult = $this->db->get_where('lead',array('session_id' => $session_id))->result();
                if (empty($leadResult)) {
                    $leadData = array();
                    $leadData['session_id'] = $session_id;
                    $leadData['IP'] = $this->input->ip_address();
                    $leadData['user_agent'] = $this->input->user_agent();
                    $leadData['type'] = 'moving';
                    $leadData['account_id'] = '1000';
                    $leadData['received_timestamp'] =  date('Y-m-d H:i:s');
                    $this->db->insert('lead', $leadData);
                    $lead_id = $this->db->insert_id();
                   
                    $meta = array();
                    $meta['utm_source'] = $this->input->get('utm_source');
                    $meta['utm_medium'] = $this->input->get('utm_medium');
                    $meta['utm_campaign'] = $this->input->get('utm_campaign');
                    $meta['ag'] = $this->input->get('ag');
                    $meta['qs'] = $this->input->get('qs');
                    $meta['network'] = $this->input->get('network');
                    $meta['device'] = $this->input->get('device');
                    $meta['adid'] = $this->input->get('adid');
                    $meta['source'] = $this->input->get('source');
                    $meta['gclid'] = $this->input->get('gclid');
                    $meta['source'] = '/moving/mobile';

                    foreach ($meta as $key => $value) {
                        if(!empty($value) && $lead_id > 0)
                            $this->lead_model->updateLeadMeta($key, $value, $lead_id);
                    }
                        
                } else {
                    $lead_id = $leadResult[0]->lead_id;
                    $this->lead_model->updateLeadMeta('source', '/moving/mobile', $lead_id);
                }
               
	 	$this->load->view('include/header.mobile-3.php',$this->data);
	 	$this->load->view('view_moving.mobile-3.php',$this->data);
	 	$this->load->view('include/footer.mobile-3.php');
      
	}
  	
	// for calculating quote range
	public function calc(){
		$miles = explode(' ',$this->input->post('miles'));
		$distance = str_replace(",", "", $miles[0]);
		$rooms = array(
			'Moving Boxes Only' => array(
						 	'min' => 143,
							'max' => 400
					),
			'studio' => array(
							'min' => 143,
							'max' => 400
						),
			'one bedrooms house'	=> array(
							'min' => 400, 
							'max' => 600
						),
			'one bedrooms apartment' => array(
							'min' => 300,
							'max' => 600
						),
			'two bedrooms house' => array(
							'min' => 700,
							'max' => 1100
						),
			'two bedrooms apartment' => array(
							'min' => 600,
							'max' => 1000
						),
			'three bedrooms house' => array(
							'min' => 1100,
							'max' => 2000
						),
			'three bedrooms apartment' => array(
							'min' => 800,
							'max' => 1500
						),
			'four bedrooms house' => array(
							'min' => 1500,
							'max' => 2500
						),
			'four bedrooms apartment' => array(
							'min' => 1300,
							'max' => 2200
						),
			'five bedrooms house' => array(
							'min' => 1500,
							'max' => 3800
						),
			'five bedrooms apartment' => array(
							'min' => 1100,
							'max' => 2800
						),
			'six bedrooms house' => array(
							'min' => 2000,
							'max' => 5000
						),
			'six bedrooms apartment' => array(
							'min' => 1500,
							'max' => 3800
						),
			'six bedrooms and more house' => array(
							'min' => 2000,
							'max' => 5000
						),
			'six bedrooms and more apartment' => array(
							'min' => 1500,
							'max' => 3800
						),
			'six bedrooms and more' => array(
                                                        'min' => 1500,
                                                        'max' => 3800
                                                )

		);	
		$rooms_value = $this->input->post('rooms');
		$min = $this->calculate((float) $distance,$rooms[$rooms_value]['min']);
		$max = $this->calculate((float) $distance,$rooms[$rooms_value]['max']);
		$min_price = $min['cost']['70'];
		$max_price = $max['cost']['45'];
		if($min_price < 200) {
			$min_price = $min_price + 200;
			$max_price = $max_price + 200;
		}
		$min_price = $min['cost']['70'];
		$max_price = $max['cost']['45'];
		if($min_price < 200) {
			$min_price = $min_price + 200;
			$max_price = $max_price + 200;
		}
		$price = array(
			'min' => number_format(ceil($min_price)),
			'max' => number_format(ceil($max_price))
		);
		echo json_encode($price);	
	}

	private function calculate($miles,$cube){
		//$cube = $weight / 7;
		$trgas = $miles * 2 / 3;
		$min = ($miles <= 100 ? (125 + 3.75 * $miles): ($miles <= 200 ? (500 + 2*($miles-100)) : ($miles <= 500 ? (700 + 0.5 * ($miles - 200)) : ($miles <= 600 ? (850 + 0.25 * ($miles - 500)) : 875 + ($miles - 600) * 0.1) ) ));
		//echo $min . "\n";
		$RPC = ( $miles <= 300 ? (1.25 + ($miles * 0.0025)) : ($miles <= 400 ? (2 + ($miles - 300) * 0.002) : ($miles <= 600 ? (2.2 + ($miles - 400) * 0.001) : ($miles <= 1400 ? (2.4 + ($miles - 600) * 0.0005) : ($miles <= 2100 ? (2.85 + ($miles - 1400) * 0.001) : ($miles <= 2600 ? (3.55 + ($miles - 2100)*0.0007) : (3.9 + ($miles - 2600) * 0.0005)))))));
		//echo $RPC;
		$COEF = ($cube <= 185 ? 1 : ($cube <= 300 ? (1 - ($cube - 185) * 0.0015) : ($cube <= 400 ? (0.8275 + (($cube - 300) * 0.0008)) : ($cube <= 500 ? (0.9075 + (($cube - 400) * 0.00055)) : ($cube <= 600 ? (0.9625 + (($cube - 500) * 0.000375)) : 1)))));
		$SCOEF = (($miles >= 1599 && $cube >= 290 && $cube <= 320) ? $COEF + 0.04 : (($miles >= 1599 && $cube >= 321 && $cube <= 340) ? 0.8835-(($cube-321)*0.001) : $COEF));
		if($cube == 0){
			$cube = 0.0000000001;
		}
		$CO = ($cube <= 143 ? $min / $cube : ($min + (($cube - 143) * $RPC)) / $cube);
		$RRPC = array(
			'70' => $CO * 2.75 * 0.3 * $SCOEF,
			'67' => $CO * 2.75 * 0.33 * $COEF,
			'63' => $CO * 2.75 * 0.37 * $COEF,
			'55' => $CO * 2.75 * 0.45 * $COEF,
			'45' => $CO * 2.75 * 0.55 * $COEF
		);

		
		foreach($RRPC as $key => $value){
			$Ibs[$key] = $value / 7;
			$cost[$key] = $cube * $value * 1.1;
		}
		return array(
			'Ibs' => $Ibs,
			'cost' => $cost,
			'RRPC' => $RRPC
		);
	} 

	public function thank_you()
	{
		
		//$this->load->library('xmlrpc');
		$this->load->helper('security');
		$this->load->model('lead_model');	 
		//$this->xmlrpc->set_debug(TRUE);

		$this->data['include_js'] = 'moving.js';
		
		//$this->xmlrpc->server('http://url/', 80);
		//$this->xmlrpc->method('lead');
                $phone = $this->input->post('phone');
				$phone = preg_replace("/[^0-9]/", "", $phone);
                $session_id = $this->session->userdata('my_session_id');
                $this->db->select('lead_id');
                $this->db->where('session_id',$session_id);
                $lead = $this->db->get('lead')->result();
                $email = $this->input->post('email');
               
                    $data = array();
                    $data['session_id']	= $session_id;
                    $data['first_name']	= $this->input->post('first_name');
                    $data['last_name']	= $this->input->post('last_name');
                    $data['address']	= "";
                    $data['phone']		= $phone;
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
                  // if already inserted then no need to add same lead again for same session  
                    
//                    if(count($lead) == 0 && $phone > 0 && !filter_var($email, FILTER_VALIDATE_EMAIL) === false ) {
//                      $lead_id = $this->lead_model->insert($data, $meta);
//                      $data['lead_id'] = $lead_id;
//                      $request = array_merge($data, $meta);
//                      $this->submitToMatrix($request);
//                   }
                   
                    if (count($lead) == 0) {
                        $data['session_id'] = $session_id;
                        $lead_id = $this->lead_model->insert($data, $meta);
                        $data['lead_id'] = $lead_id;
                        $request = array_merge($data, $meta);
                        if($phone > 0 && !filter_var($email, FILTER_VALIDATE_EMAIL) === false )
                        	$this->submitToMatrix($request);
                    } else {
                        // exit;
                        $this->lead_model->update($data, $session_id);
                        $data['lead_id'] = $lead_id = $lead[0]->lead_id;
                        $data['session_id'] = $session_id;
                        foreach ($meta as $key => $value) {
                            $this->lead_model->updateLeadMeta($key, $value, $lead_id);
                        }
                        $request = array_merge($data, $meta);
                        if($phone > 0 && !filter_var($email, FILTER_VALIDATE_EMAIL) === false )
                        	$this->submitToMatrix($request);
                     }
                    // Zip_from and to added for Quote Range
                    $this->data['zip_from'] = $meta['from_zip_code'];
                    $this->data['zip_to'] = $meta['to_zip_code'];
                    $this->data['number_of_rooms'] = $meta['move_size'];


		$this->load->view('include/header.php');
		$this->load->view('view_moving_thank_you', $this->data);
		$this->load->view('include/footer');	
	}
	public function thankyou()
	{
		
		//$this->load->library('xmlrpc');
		$this->load->helper('security');
		$this->load->model('lead_model');	 
		//$this->xmlrpc->set_debug(TRUE);

		$this->data['include_js'] = 'moving.js';
		
		
                $session_id = $this->session->userdata('my_session_id');
                $this->db->select('lead_id');
                $this->db->where('session_id',$session_id);
                $lead = $this->db->get('lead')->result();
                 $leadMeta = $this->lead_model->getLeadMeta($lead[0]->lead_id);
                 $meta = array();
                 foreach($leadMeta as $m) {
                 if(in_array($m->key,array('from_zip_code','to_zip_code','move_size','move_date'))) {
                        $meta[$m->key] = !empty($m->value) ? $m->value : $this->input->post($m->key);
                    }
                 }
//                 echo "<pre>";
//                 print_r($meta);
//                 print_r($meta);
//                 echo "</pre>";
                    // Zip_from and to added for Quote Range
                    $this->data['zip_from'] = $meta['from_zip_code'];
                    $this->data['zip_to'] = $meta['to_zip_code'];
                    $this->data['number_of_rooms'] = $meta['move_size'];


		$this->load->view('include/header.php');
		$this->load->view('view_moving_thank_you', $this->data);
		$this->load->view('include/footer');	
	}
	
	private function submitToMatrix($data) {
		//print_r($data);
		if($_SERVER['SERVER_ADDR'] == "23.253.253.236") {
			$row = $data;
		
			if(!empty($row['utm_source'])){
			
				if($row['utm_source'] == 'goog' || $row['utm_source'] == 'adwords'){
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
                        if($landing_page == '/quotes') {
                            $origin = 'QR(Email)';
                        }
	                $xverify_phone = $this->targus_score($row['session_id'], $row['phone']);
	                $xvr_phone = '';
	                $xvr_email = '';
	                if ($xverify_phone) {
	                    $xvr_phone = $xverify_phone['phone_score'];
	                    $xvr_email = $xverify_phone['email_score'];
	                }
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
			$xml .= "	<xvr_phone>".$xvr_phone."</xvr_phone>\n";
			//$xml .= "	<xvr_phone_city>".$xvr_city."</xvr_phone_city>\n";
			//$xml .= "	<xvr_phone_state>".$xvr_state."</xvr_phone_state>\n";
			$xml .= "	<xvr_email>".$xvr_email."</xvr_email>\n";
			$xml .= "	<phone2></phone2>\n";
			$xml .= "	<move_size>".$row['move_size']."</move_size>\n";
			$xml .= "	<IP>".$row['IP']."</IP>\n";
			$xml .= "	<GCLID>".$row['gclid']."</GCLID>\n";
			$xml .= "	<move_date>".date('Y-m-d',strtotime($row['move_date']))."</move_date>\n";
			$xml .= "</lead>\n";
			//echo $xml;
			//exit;
			
			$matrix_response = $this->curl_submit($xml,$row['lead_id']);
		}
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
        
        public function send() {
        if ($this->input->is_ajax_request()) {
            
            $session_id = $this->session->userdata('my_session_id');
            $this->db->select('*');
            $this->db->where('session_id',$session_id);
            $lead = $this->db->get('lead')->result();
           
            $phone = $this->input->post('phone');
            $phone = preg_replace("/[^0-9]/", "", $phone);
            
            $this->load->model('lead_model');
            $data = array();
            $data['first_name'] = (isset($lead[0]->first_name) && !empty($lead[0]->first_name)) ? $lead[0]->first_name : $this->input->post('first_name');
            $data['last_name'] = (isset($lead[0]->last_name) && !empty($lead[0]->last_name)) ? $lead[0]->last_name :  $this->input->post('last_name');
            $data['address'] = "";
            $data['phone'] = (isset($lead[0]->phone) && !empty($lead[0]->phone)) ? $lead[0]->phone : $phone;
            $data['email'] = (isset($lead[0]->email) && !empty($lead[0]->email)) ? $lead[0]->email :  $this->input->post('email');
            $data['IP'] = (isset($lead[0]->IP) && !empty($lead[0]->IP)) ? $lead[0]->IP :  $this->input->ip_address();
            $data['user_agent'] = (isset($lead[0]->user_agent) && !empty($lead[0]->user_agent)) ? $lead[0]->user_agent :  $this->input->user_agent();
            $data['type'] = 'moving';
            $data['account_id'] = '1000';
            $leadMeta = $this->lead_model->getLeadMeta($lead[0]->lead_id);

            $meta = array();
            if(empty($leadMeta)) {
                $meta['from_zip_code'] = $this->input->post('from_zip_code');
                $meta['to_zip_code'] = $this->input->post('to_zip_code');
                $meta['move_size'] = $this->input->post('move_size');
                $meta['move_date'] = $this->input->post('move_date');
            } else {
                foreach($leadMeta as $m) {
                    if(in_array($m->key,array('from_zip_code','to_zip_code','move_size','move_date'))) {
                        $meta[$m->key] = !empty($m->value) ? $m->value : $this->input->post($m->key);
                    }
                }
                
            }
            
            //Google Adwords variables
            $meta['utm_source'] = $this->input->post('utm_source');
            $meta['utm_medium'] = $this->input->post('utm_medium');
            $meta['utm_campaign'] = $this->input->post('utm_campaign');
            $meta['ag'] = $this->input->post('ag');
            $meta['qs'] = $this->input->post('qs');
            $meta['network'] = $this->input->post('network');
            $meta['device'] = $this->input->post('device');
            $meta['adid'] = $this->input->post('adid');
            $meta['source'] = $this->input->post('source');
            $meta['gclid'] = $this->input->post('gclid');
            $source =  $this->input->post('source');
            if(!empty($source))
                $meta['source'] = $source;
            $email = $this->input->post('email');
            if (count($lead) == 0) {
                $data['session_id'] = $session_id;
                $lead_id = $this->lead_model->insert($data, $meta);
                $data['lead_id'] = $lead_id;
                $request = array_merge($data, $meta);
                if($phone > 0 && !filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false)
                	$this->submitToMatrix($request);
            } else {
                // exit;
                $this->lead_model->update($data, $session_id);
                $data['lead_id'] = $lead_id = $lead[0]->lead_id;
                $data['session_id'] = $session_id;
                foreach ($meta as $key => $value) {
                    $this->lead_model->updateLeadMeta($key,$value , $lead_id);
                }
                $request = array_merge($data, $meta);
                if($phone > 0 && !filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false )
                	$this->submitToMatrix($request);
            }
            if($lead_id)
                echo 'true';
            else
                echo 'false';
        } else {
           echo 'false';
        }
        exit;
    }
     private function targus_score($session_id = null, $phone = null) {

        $this->db->select('phone_score,email_score,phone_number');
        $result1 = $this->db->get_where('targus', array('session_id' => $session_id));
        $row1 = $result1->result();
        
        $phone_score = $ph_score = isset($row1[0]->phone_score) ? $row1[0]->phone_score : '';
        $email_score = isset($row1[0]->email_score) ? $row1[0]->email_score : '';
        if (!empty($row1)) {
            $phone_number = $row1[0]->phone_number;

            //if ($ph_score <= 40) {
                $this->db->select('verified,to_number');
                $result2 = $this->db->get_where('plivo_call_details', array('session_id' => $session_id, 'to_number' => $phone));
                $row2 = $result2->result();
                if (!empty($row2)) {
                    $verified = $row2[0]->verified;
                    $to_number = $row2[0]->to_number;
                    if ($verified == 1) {
                        $phone_score = 99;
                    } else {
                        if ($to_number != $phone_number) {
                            $phone_score = "";
                        }
                    }
                } else {
                    $this->db->select('verified,to_number');
                    $result3 = $this->db->get_where('plivo_sms_details', array('session_id' => $session_id, 'to_number' => $phone));
                    $row3 = $result3->result();
                    if (!empty($row3)) {
                        $verified2 = $row3[0]->verified;
                        $to_number2 = $row3[0]->to_number;
                        if ($verified2 == 1) {
                            $phone_score = 99;
                        } else {
                            if ($to_number2 != $phone_number) {
                                $phone_score = "";
                            }
                        }
                    }
                }
           // }
            $row1 = array(
                'phone_score' => $phone_score,
                'email_score' => $email_score
            );
        }

        return $row1;
    }
    
        function send_lead_manually() {
        $to_date = date('Y-m-d H:i:s' , strtotime('-2 minute'));
        $from_date = date('Y-m-d H:i:s' , strtotime('-24 hour'));
        $sql = "SELECT l.session_id,l.lead_id,l.first_name,l.last_name,l.email,l.phone,l.received_timestamp,m.*
                FROM `lead` as l 
                LEFT JOIN matrix_response as m on m.lead_id = l.lead_id WHERE first_name is not null and phone is not null and matrix_lead_id is null and received_timestamp >= '$from_date'  and last_updated <= '$to_date' order by 1 desc
                LIMIT 500";
        $results = $this->db->query($sql)->result();
        $this->load->model('lead_model');
        
//         $this->load->library('Postmark');
//         $postmark = new Postmark('c6c42a28-e456-48b7-a997-6b5c479b51ab', 'info@gotmovers.com');
//         $sent = $postmark->to('bhavesh@equatemedia.com')
//         ->subject('QR Cron run at' .$to_date)
//         ->html_message('Total '.count($results) . ' records found.')
//         ->send();
        
        foreach($results as $row ) {
            $Lead = $this->lead_model->getLead($row->session_id);
//            echo "<pre>";
//            print_r($Lead);
//            echo "</pre>";
            //exit;
            $leadMeta = $this->lead_model->getLeadMeta($Lead[0]->lead_id);
            $meta = array();
            foreach ($leadMeta as $m) {
                $meta[$m->key] = $m->value;
            }
            $data = (array) $Lead[0];
            
            $request = array_merge($data, $meta);
            echo "<pre>";
            //print_r($leadMeta);
            print_r($request);
            echo "</pre>";
            //exit;
             $this->submitToMatrix($request);
        }
    }
   
    public function save_steps(){
    	if ($this->input->is_ajax_request()) {
    		
    		$session_id = $this->session->userdata('my_session_id');
    		$this->db->select('lead_id');
    		$this->db->where('session_id',$session_id);
    		$lead = $this->db->get('lead')->result();
    		
    		$step = $this->input->post('step');
    		
    		$this->load->model('step_model');
    		
    		if($step == "loader" || $step == "getquotes1" || $step == "zip" || $step == "move_date" || $step == "move_size" || $step == "email" || $step == "name" || $step == "phone"){
    			$lead_id = $this->step_model->save($step, $lead[0]->lead_id);
    		}
    	}	
    } 
   
}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
