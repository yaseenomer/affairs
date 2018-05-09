<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_con  extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Employees/Employees');
	}
    
}
