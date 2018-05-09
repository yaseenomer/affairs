<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class EmpNameModel extends CI_Model
{
	 public function GetEmp()
    {
      return  $query = $this->db->get('EMPLOYEES_HR')->result();
    }
/**********************************/
  
        

/*************************************/

    public function GetEmpWhere($id)
    {
        $this->db->select("*");
        $this->db->from("EMPLOYEES_HR");
        $this->db->like("EMP_NAME", $id ); 
        //return $this->db->get()->result();
        echo $this->db->get_compiled_select();
        
      //  select business_name, dump(business_name, 1016), convert (business_name, 'UTF8', 'WE8ISO8859P1') from customers where vid = 931402;
        
    }
/**********************************/
    
   /* public function AddCOUNTRIES($data)
    {
        $this->db->insert('EMPLOYEES_HR', $data);

    }*/
/**********************************/    
   /*  public function UpdateCOUNTRIES($id,$array)
    {
        $this->db->where('COUNTRY_NO', $id);
          return $this->db->update('EMPLOYEES_HR',$array);
    }*/
/**********************************/    
 /*   public function DeleteCOUNTRIES($id)
    {
       return  $this->db->delete('EMPLOYEES_HR', array('COUNTRY_NO' => $id));
    }*/
/**********************************/	
}