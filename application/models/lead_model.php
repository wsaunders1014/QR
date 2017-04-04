<?php

class lead_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function insert($data, $meta) {
        $this->db->set('received_timestamp', 'NOW()', FALSE);
        $this->db->insert('lead', $data);
        $insert_id = $this->db->insert_id();

        foreach ($meta as $key => $value) {
            $this->db->insert('lead_meta', array('key' => $key, 'value' => $value, 'lead_id' => $insert_id));
        }

        return $insert_id;
    }

    function update($data, $session_id) {
        $Leads = $this->getLead($session_id);
        if (count($Leads) > 0)
            $this->db->update('lead', $data, array('session_id' => $session_id));
        else {
            $data['session_id'] = $session_id;
            $data['IP'] = $this->input->ip_address();
            $data['user_agent'] = $this->input->user_agent();
            $data['type'] = 'moving';
            $data['account_id'] = '1000';
            $data['received_timestamp'] = date('Y-m-d H:i:s');
            $this->db->insert('lead', $data);
            return $insert_id = $this->db->insert_id();
        }
    }

    function updateLeadMeta($key, $value, $lead_id) {
        $this->db->select('meta_id');
        $result = $this->db->get_where('lead_meta', array('lead_id' => $lead_id, 'key' => $key))->result();
//        var_dump($result);
//        echo $lead_id;
        if (count($result)) {
            $this->db->update('lead_meta', array('value' => $value), array('meta_id' => $result[0]->meta_id));
        } else {
            $this->db->insert('lead_meta', array('key' => $key, 'value' => $value, 'lead_id' => $lead_id));
        }
    }

    function getLead($session_id) {
        $this->db->select('*');
        return $this->db->get_where('lead', array('session_id' => $session_id))->result();
    }

    function getLeadMeta($lead_id) {
        $this->db->select('*');
        return $this->db->get_where('lead_meta', array('lead_id' => $lead_id))->result();
    }

    function getLeadMetaByKey($key, $lead_id) {
        $this->db->select('*');
        return $this->db->get_where('lead_meta', array('key' => $key, 'lead_id' => $lead_id))->result();
    }

}

?>