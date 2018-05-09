<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countries_con  extends CI_Controller {

	
	public function index()
	{
	    parent::__construct();
        $this->load->model('CountriesModel');
  		 $data['generals'] = $this->CountriesModel->GetCountris();
           $this->load->view('Countries/CountriesShow', $data);
	}
    
}
