<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class UniversitiesModel extends CI_Model

{
    public function getAccounts(){
		return $this->db->get('COUNTRIES')->result();
	}
   //-------------------------------------------------------------------------------------	
	public function getAccounts1($offset , $current , $cond=''){
		if($cond != '')
		      $this->db->where($cond);
		return $this->db->get('COUNTRIES' ,$offset , $current )->result();
	}
	 public function GetUniversities()
    {
      return  $query = $this->db->get('UNIVERSITIES')->result();
    }
/**********************************/

    public function GetUniversitiesWhere($id)
    {
        $this->db->select('*');
        $this->db->from('UNIVERSITIES');
        $this->db->where('UNV_ID', $id);
        $this->db->join('COUNTRIES','COUNTRIES.COUNTRY_NO = UNIVERSITIES.COUNTRY_NO');
        return $this->db->get()->result();
        //return $this->db->get('UNIVERSITIES')->result();
    }
    /**********************************/

    public function GetCountrnameWhere($id)
    {
        $this->db->where('COUNTRY_NO', $id);
        return $this->db->get('COUNTRIES')->result();
    }
/**********************************/
    public function GetCountrname($id)
    {
        $this->db->select('COUNTRY_NAME');
        $this->db->where('COUNTRY_NO', $id);
        return $this->db->get('COUNTRIES')->result();
    }
    /**********************************/
    
    public function AddUniversities($data)
    {
        $this->db->insert('UNIVERSITIES', $data);

    }
/**********************************/    
     public function UpdateUniversities($unid,$data)
    {
        $this->db->where('UNV_ID', $unid);
        $this->db->update('UNIVERSITIES', $data);
    }
/**********************************/    
    public function DeleteUniversities($unid)
    {
       return  $this->db->delete('UNIVERSITIES', array('UNV_ID' => $unid));
    }
/**********************************/	
public function getLevels(){
        $this->db->where('COUNTRY_NO IS  not NULL');
		$this->db->order_by('COUNTRY_NAME', 'ASC');
		return $this->db->get('COUNTRIES')->result();
	}
     /*************************************************/
     public function get_all_level1(){
      return $this->db->from('COUNTRIES') 
                       //->where('g')
                       ->get()
                       ->result();
     }
}