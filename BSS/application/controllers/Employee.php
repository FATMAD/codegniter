<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	 function __construct() {
        parent::__construct();
        //print "In SubClass constructor\n";
    }

	public function index()

	{
		$this->load->view('layout/employee');


		$this->load->view('welcome_message');
		
		$this->load->view('layout/footer');
	}
}
