<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class Academic_degreesModel extends CI_Model
{
	 public function GetAcademic_degrees()
    {
      return  $query = $this->db->get('ACADEMIC_DEGREES')->result();
    }
/**********************************/

    public function GetAcademic_degreesWhere($id)
    {
        $this->db->where('DEG_ID', $id);
        return $this->db->get('ACADEMIC_DEGREES')->result();
    }
/**********************************/
    
    public function AddAcademic_degrees($data)
    {
        $this->db->insert('ACADEMIC_DEGREES', $data);

    }
/**********************************/    
     public function UpdateAcademic_degrees($conid,$data)
    {
        $this->db->where('DEG_ID', $conid);
        $this->db->update('ACADEMIC_DEGREES', $data);
    }
/**********************************/    
    public function DeleteAcademic_degrees($conid)
    {
       return  $this->db->delete('ACADEMIC_DEGREES', array('DEG_ID' => $conid));
    }
/**********************************/	
}