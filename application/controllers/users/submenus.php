<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubMenus extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('users/submenumodel', 'sbm');
		$this->load->model('generalmodel' , 'gm');
	}
	
	public function index(){
		
	}
	
	public function create(){
		$data['main_menu'] = $this->gm->filldrop('MAIN_MENUS','MAIN_MENU_ID','MAIN_MENU_NAME',
		array());
		
		$this->load->view('users/submenus/sub_menus',$data);
	}
	
	public function save(){
		$mid = $this->input->post('main_menu');
		$sname = $this->input->post('sub_menu');
		$url = $this->input->post('surl');
	    $d=array('MAIN_MENU_ID'=>$mid,'SUB_MENU_NAME'=>$sname,'SUB_MENU_URL'=>$url);
		if($this->sbm->save($d))
		{
			return $this->create();
		}
	}
}
