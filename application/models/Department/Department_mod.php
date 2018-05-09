<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =UTF-8');

class Department_mod extends CI_Model
{
	public function getDepart()
    {
      return  $query = $this->db->get('DEPARTMENTS')->result();
    }
	
	public function getDepartWherecol($locid,$depid)
    {
		$this->db->where('LOC_NO', $locid);
		$this->db->where('DEP_ID', $depid);
        return $this->db->get('DEPARTMENTS')->result();
    }
	public function getDepartWherecoll($depid)
    {
		$this->db->where('LOC_NO', $depid);
        return $this->db->get('DEPARTMENTS')->result();
    }
	
	public function addDepart($data)
    {
        $this->db->insert('DEPARTMENTS', $data);
    }
    
    public function updateDepart($colid,$depid, $data)
    {
        $this->db->where('DEP_ID', $depid);
		$this->db->where('LOC_NO', $colid);
        $this->db->update('DEPARTMENTS', $data);
    }
    
    public function deleteDepart($depid,$locid)
    {
       return  $this->db->delete('DEPARTMENTS', array('DEP_ID' => $depid , 'LOC_NO' => $locid));
    }
	
	public function getCollage()
    {
      $query = $this->db->get('LOCATION_TYP');
	  $this->db->order_by('LOC_NO','ASC');
	  if($query->num_rows()>0)
    {
		return $query->result();
    }
    else
    {
      return FALSE;
    }
	}
	
	public function getCollageWhere($id)
    {
        $this->db->where('LOC_NO', $id);
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