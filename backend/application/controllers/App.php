<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET , OPTIONS");
header("Access-Control-Allow-Header: Origin , Content-Type");


    
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    
 		function __construct()
 		{
 	    parent::__construct();
            $this->load->helper('form');
 		}


	
	
    public function index()
    {
        $this->load->view('home/home');
    }

	
  
}
