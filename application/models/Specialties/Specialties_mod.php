<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =UTF-8');

class Specialties_mod extends CI_Model
{
  public function getSpeci()
    {
      return  $query = $this->db->get('SPECIALTIES')->result();
    }
	public function getDepart()
    {
      return  $query = $this->db->get('DEPARTMENTS')->result();
    }
	
	public function getSpeciWherecoldep($spcid ,$depid ,$colid)
    {
		$this->db->where('LOC_NO', $colid);
		$this->db->where('DEP_ID', $depid);
		$this->db->where('SP_ID', $spcid);
        return $this->db->get('SPECIALTIES')->result();
    }
	public function getSpeciWheredepcol($locno,$depid)
    {
		$this->db->where('LOC_NO', $locno);
		$this->db->where('DEP_ID', $depid);
        return $this->db->get('SPECIALTIES')->result();
    }
	public function getdepWhereloc($locid)
    {
		$this->db->where('LOC_NO', $locid);
        return $this->db->get('DEPARTMENTS')->result();
    }
	
	 public function addSpeci($data)
    {
        $this->db->insert('SPECIALTIES', $data);

    }
    
     public function updateSpeci($locid,$depid,$spcid, $data)
    {
        $this->db->where('LOC_NO', $locid);
		$this->db->where('DEP_ID', $depid);
		$this->db->where('SP_ID', $spcid);
        $this->db->update('SPECIALTIES', $data);
    }
	public function getDepartWherecol($depid,$locid){
		$this->db->where('LOC_NO', $locid);
		$this->db->where('DEP_ID', $depid);
        return $this->db->get('DEPARTMENTS')->result();
	}
	public function getCollageWhere($colid){
		$this->db->where('LOC_NO', $colid);
        return $this->db->get('LOCATION_TYP')->result();
	}
    
    public function deleteSpeci($spcid,$depid,$locid)
    {
       return  $this->db->delete('SPECIALTIES', array('SP_ID' => $spcid , 'DEP_ID' => $depid ,'LOC_NO' =>$locid));
    }
	public function getCollage()
    {
      $query = $this->db->get('LOCATION_TYP');
	  if($query->num_rows()>0)
    {
		return $query->result();
    }
    else
    {
      return FALSE;
    }
	}
}