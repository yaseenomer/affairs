<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Committees_member_con  extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Committees_member/Committees_member');
	}
    
}
