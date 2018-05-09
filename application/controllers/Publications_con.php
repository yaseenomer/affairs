<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publications_con  extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Publications/Publications');
	}
    
}
