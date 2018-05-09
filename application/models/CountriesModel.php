<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class COUNTRIESModel extends CI_Model
{
	 public function GetCountris()
    {
      return  $query = $this->db->get('COUNTRIES')->result();
    }
/**********************************/
  
        

/*************************************/

    public function GetCountriWhere($id)
    {
        $this->db->select('*');
        $this->db->from('COUNTRIES');
        $this->db->where('COUNTRY_NO', $id);
        return $this->db->get()->result();
    }
/**********************************/
    
    public function AddCOUNTRIES($data)
    {
        $this->db->insert('COUNTRIES', $data);

    }
/**********************************/    
     public function UpdateCOUNTRIES($id,$array)
    {
        $this->db->where('COUNTRY_NO', $id);
          return $this->db->update('COUNTRIES',$array);
    }
/**********************************/    
    public function DeleteCOUNTRIES($id)
    {
       return  $this->db->delete('COUNTRIES', array('COUNTRY_NO' => $id));
    }
/**********************************/	
}