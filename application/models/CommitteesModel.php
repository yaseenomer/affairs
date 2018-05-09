<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class COMMITTEESModel extends CI_Model
{
	 public function GetCOMMITTEES()
    {
      return  $query = $this->db->get('COMMITTEES')->result();
    }
/**********************************/

    public function GetCOMMITTEESWhere($id)
    {
        $this->db->where('COMM_ID', $id);
        return $this->db->get('COMMITTEES')->result();
    }
/**********************************/
    
    public function AddCOMMITTEES($data)
    {
        $this->db->insert('COMMITTEES', $data);

    }
/**********************************/    
     public function UpdateCOMMITTEES($conid,$data)
    {
        $this->db->where('COMM_ID', $conid);
        $this->db->update('COMMITTEES', $data);
    }
/**********************************/    
    public function DeleteCOMMITTEES($conid)
    {
       return  $this->db->delete('COMMITTEES', array('COMM_ID' => $conid));
    }
/**********************************/	
}