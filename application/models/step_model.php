<?php

class step_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function save($step, $lead_id) {
    	$this->db->where('lead_id',$lead_id);
    	$q = $this->db->get('steps');
    	
	if ($q->num_rows() > 0 ){
    		$this->db->where('lead_id',$lead_id);
    		$this->db->update('steps',array($step => '1'));
    	} else {
    		if($step){
			$this->db->insert('steps',array("lead_id" => $lead_id, $step => '1'));
    		} else {
			$this->db->insert('steps',array("lead_id" => $lead_id));
		}
	}
    }
}

?>
