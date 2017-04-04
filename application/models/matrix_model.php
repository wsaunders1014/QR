<?php
class matrix_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function insert($data)
    {
    	//$this->db->set('received_timestamp', 'NOW()', FALSE);
        $this->db->insert('matrix_response', $data); 
		$insert_id = $this->db->insert_id();
		
		return $insert_id;
    }

   
}
?>