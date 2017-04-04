<?php

if (!defined('BASEPATH'))
    die();

class Test extends Main_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
//        echo $this->postmarkEmail.'::'.$this->postmarkKey;
       echo $_SERVER['SERVER_ADDR'];
       echo '::'.$_SERVER['SERVER_NAME'];
    }

}