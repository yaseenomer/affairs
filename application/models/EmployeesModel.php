<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class EmployeesModel extends CI_Model
{
	 public function GetEMPLOYEES()
    {
      return  $query = $this->db->get('EMPLOYEES')->result();
    }
/**********************************/
  
        

/*************************************/

    public function GetEMPLOYEESWhere($id)
    {
        $this->db->select('*');
        $this->db->from('EMPLOYEES');
        $this->db->where('EMP_NO', $id);
        return $this->db->get()->result();
    }
/**********************************/
    
    public function AddEMPLOYEES($data)
    {
        $this->db->insert('EMPLOYEES', $data);

    }
/**********************************/    
     public function UpdateEMPLOYEES($id,$array)
    {
        $this->db->where('EMP_NO', $id);
          return $this->db->update('EMPLOYEES',$array);
    }
/**********************************/    
    public function DeleteEMPLOYEES($id)
    {
       return  $this->db->delete('EMPLOYEES', array('EMP_NO' => $id));
    }
/**********************************/	
}