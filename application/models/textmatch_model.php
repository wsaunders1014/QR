<?php

class textmatch_model extends CI_Model {

    public $textmatch_settings;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->db2 = $CI->load->database('db2', TRUE);
    }

    public function fetchAll() {
        return $this->db2->get('textmatch')->result();
    }

    public function fetchExact() {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'exact'))->result();
        return !empty($resultSet) ? $resultSet : false;
    }

    public function isExact($exact) {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'exact', 'text' => $exact))->result();
        return !empty($resultSet) ? true : false;
    }

    public function fetchPartial() {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'partial'))->result();
        return !empty($resultSet) ? $resultSet : false;
    }

    public function isPartial($partial) {
        $partialTable = $this->fetchPartial();
        foreach ($partialTable as $part) {
            if (strpos($partial, $part->text) !== false) {
                return true;
            }
        }
        return false;
    }

    public function fetchNameSet() {
//        $resultSet = $this->tableGateway->select(array('type' => 'name-set'));
//        return $resultSet;
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'name-set'))->result();
        return !empty($resultSet) ? $resultSet : false;
    }

    public function isNameSetTable($name_set) {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'name-set', 'text' => $name_set))->result();
        return !empty($resultSet) ? true : false;
    }

    public function fetchFullEmail() {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'full-email'))->result();
        return !empty($resultSet) ? $resultSet : false;
    }

    public function isFullEmailTable($full_email) {

        $resultSet = $this->db2->get_where('textmatch', array('type' => 'full-email', 'text' => $full_email))->result();
        return !empty($resultSet) ? true : false;
    }

    public function fetchAddressEmail() {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'address-email'))->result();
        return !empty($resultSet) ? $resultSet : false;
    }

    public function isAddressEmailTable($address_email) {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'address-email', 'text' => $address_email))->result();
        return !empty($resultSet) ? true : false;
    }

    public function fetchDomainEmail() {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'domain-email'))->result();
        return !empty($resultSet) ? $resultSet : false;
    }

    public function isDomainEmailTable($domain_email) {
        $resultSet = $this->db2->get_where('textmatch', array('type' => 'domain-email', 'text' => $domain_email))->result();
        return !empty($resultSet) ? true : false;
    }

    public function getTextMatch($id) {
        $id = (int) $id;
        $resultSet = $this->db2->get_where('textmatch', array('id' => $id))->result();
        return !empty($resultSet) ? $resultSet : false;
    }

    public function saveTextMatch($textmatch) {
        $id = (int) $textmatch['id'];
        if ($id == 0) {
            $textlist = preg_split("/(\n|,)/", $textmatch['text']);
            foreach ($textlist as $text) {
                $data = array(
                    'type' => trim($textmatch['type']),
                    'text' => trim($text),
                    'date_time' => date('Y-m-d H:i:s')
                );
                $this->db2->insert('textmatch', $data);
            }
        } else {
            if ($this->getTextMatch($id)) {
                $data = array(
                    'type' => $textmatch['type'],
                    'text' => $textmatch['text'],
                    'date_time' => date('Y-m-d H:i:s')
                );
                $this->db2->where('id', $id);
                $this->db2->update('textmatch', $data);
            } else {
                throw new \Exception('TextMatch id does not exist');
            }
        }
    }

    public function deleteTextMatch($id) {
        $this->db2->delete('textmatch', array('id' => (int) $id));
    }

    public function isExactName($value) {
        if ($this->textmatch_settings->exact_name == 0) {
            return false;
        }

        return $this->isExact($value);
    }

    public function isPartialName($value) {
        if ($this->textmatch_settings->partial_name == 0) {
            return false;
        }
        return $this->isPartial($value);
    }

    public function isNameSet($first_name, $last_name) {
        if ($this->textmatch_settings->name_set == 0) {
            return false;
        }
        $value = trim($first_name) . ' ' . trim($last_name);
        return $this->isNameSetTable($value);
    }

    public function isFullEmail($value) {
        if ($this->textmatch_settings->full_email == 0) {
            return false;
        }
        return $this->textmatch_table->isFullEmailTable($value);
    }

    public function isAddressEmail($value) {
        if ($this->textmatch_settings->address_email == 0) {
            return false;
        }
        return $this->textmatch_table->isAddressEmailTable($value);
    }

    public function isDomainEmail($value) {
        if ($this->textmatch_settings->domain_email == 0) {
            return false;
        }
        return $this->textmatch_table->isDomainEmailTable($value);
    }

    public function check_three_repeating_characters($name) {
        $last_letter = '';
        $letter_count = 1;
        $arr_name = str_split($name);
        foreach ($arr_name as $letter) {
            if (strcasecmp($last_letter, $letter) == 0) {
                $letter_count++;
            } else {
                $letter_count = 1;
            }

            if ($letter_count >= 3) {
                return true;
            }

            $last_letter = $letter;
        }
        return false;
    }

    public function setTextMatchSettingsTable() {
        $result = $this->db2->get('textmatch_settings')->result();
        $this->textmatch_settings = $result[0];
    }

}

?>