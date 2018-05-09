<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class Program_typesModel extends CI_Model
{
	 public function GetProgram_types()
    {
      return  $query = $this->db->get('PROGRAM_TYPES')->result();
    }
/**********************************/

    public function GetProgram_typesWhere($id)
    {
        $this->db->where('PROG_TYP_ID', $id);
        return $this->db->get('PROGRAM_TYPES')->result();
    }
/**********************************/
    
    public function AddProgram_types($data)
    {
        $this->db->insert('PROGRAM_TYPES', $data);

    }
/**********************************/    
     public function UpdateProgram_types($conid,$data)
    {
        $this->db->where('PROG_TYP_ID', $conid);
        $this->db->update('PROGRAM_TYPES', $data);
    }
/**********************************/    
    public function DeleteProgram_types($conid)
    {
       return  $this->db->delete('PROGRAM_TYPES', array('PROG_TYP_ID' => $conid));
    }
/**********************************/	
}