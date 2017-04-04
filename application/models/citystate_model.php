<?php

class citystate_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        
    }

    public function zipcodeByCityState($param) {
        $this->db->select('* , LEFT(city_name, 1) as first_letter_city',FALSE);
        $this->db->from('city_state')
                ->where($param)
                ->group_by('city_name');
       $result = $this->db->get();
       return $result->result();
    }

    public function cityStateByZipcode($zipcode) {
        $this->db->select();
        $this->db->from('city_state');
          $this->db->where('zipcode', $zipcode);
        $result = $this->db->get();
        $records =  $result->result();
        return !empty($records) ? $records[0] : false;
    }

    public function cityStateByZipcodeBool($zipcode) {
        $result = $this->cityStateByZipcode($zipcode);
        if ($result == false) {
            return false;
        }

        return true;
    }

    public function searchCityStateByZipcode($search_term) {

        $this->db->select();
        $this->db->from('city_state')->limit(10);
        $this->db->like('zipcode', $search_term, 'after');
        $result = $this->db->get();
        $city_list = array();
        foreach ($result->result() as $l) {
            $city_list[ucwords(strtolower($l->city_name)) . ', ' . $l->state] = $l->zipcode;
        }
        return $city_list;
    }
    public function searchCityStateByZipcode2($search_term) {

        $this->db->select();
        $this->db->from('city_state')->limit(10);
        $this->db->like('zipcode', $search_term, 'after');
        $result = $this->db->get();
        $city_list = array();
        foreach ($result->result() as $l) {
            //$city_list[ucwords(strtolower($l->city_name)) . ', ' . $l->state] = $l->zipcode;
            $city_list[] = $l->zipcode.' '.ucwords(strtolower($l->city_name)).', '.$l->state;
        }
        return $city_list;
    }

    public function searchForCityStateNew($term, $mobile) {
        $select = $this->db->select(array('city_name', 'state', 'zipcode'));
        $term = explode(',', $term);
        $this->db->from('city_state_latlng');
        $this->db->group_by(array('city_name', 'state'));
        $this->db->limit('30');
        $this->db->order_by('population', 'desc');
        $this->db->like('city_name', trim($term[0]) ,'after');
        if (isset($term[1])) {
            $this->db->like('state', trim($term[1]) , 'after');
        }
        $result = $this->db->get();
        
        $city_list = array();
        foreach ($result->result() as $l) {
            $city_list[ucwords(strtolower($l->city_name)) . ', ' . $l->state] = $l->zipcode;
        }
        return $city_list;
    }

    public function citiesByState($state) {
       $this->db->select();
       $this->db->from('city_state')
                ->where('state' , $state)
                ->group_by('city_name');
      $result = $this->db->get();
       return $result->result();
    }

    public function searchForCityState($search_term) {
       
        $this->db->select();
        $this->db->from('city_state')
                ->where('state', $search_term)
                ->group_by('city_name');
        $result = $this->db->get();
        return $result->result();
    }

}

?>