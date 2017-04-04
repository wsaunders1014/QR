<?php 
class MY_Router extends CI_Router
{
    function _set_request($segments = array()) {
        parent::_set_request(str_replace('-', '_', $segments));
    }
    public function _parse_routes()
    {
    	foreach ($this->uri->segments as &$segment)
    	{
    		$segment = strtolower($segment);
    	}
    
    	return parent::_parse_routes();
    }
}
	
?>