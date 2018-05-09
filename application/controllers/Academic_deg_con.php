<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_deg_con extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Academic_degrees/Academic_degrees');
	}
    
}
