<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Committees_me_con  extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Committees_meeting');
	}
    
}
