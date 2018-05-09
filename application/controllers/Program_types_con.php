<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_types_con  extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Program_types/Program_types');
	}
    
}
