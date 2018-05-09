<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class EmpNoModel extends CI_Model
{
	 public function GetEmpname()
    {
      return  $query = $this->db->get('EMPLOYEES_HR')->result();
    }
/**********************************/
  
        

/*************************************/

    public function GetEmpnameWhere($id)
    {
        $this->db->select('*');
        $this->db->from('EMPLOYEES_INFO');
        $this->db->where('EMP_NO', $id);
        return $this->db->get()->result();
    }
/**********************************/	
}