<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SubMenuModel extends CI_Model
{
  public function save($d){
	  return $this->db->insert('SUB_MENUS', $d);
  } 

 
}