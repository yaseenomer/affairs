<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NavModel extends CI_Model {
	public function getMainMenu(){
	  return $this->db->get('MAIN_MENUS')->result();

	}
	
	public function getSubMenu($main , $group ){
		$this->db->where('MAIN_MENU_ID' , $main);
		$this->db->where('GROUP_ID' , $group);
		return $this->db->get('MENUS_VIEW')->result();
	}
}