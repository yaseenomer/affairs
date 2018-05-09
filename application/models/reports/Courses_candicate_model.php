<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses_candicate_model  extends CI_Model{
	
	public function Getcandicate($proid){
		$this->db->where('PROG_ID',$proid);
		$this->db->where('COUR_STATUS',0);
        $query = $this->db->get('COURCES_CANDICATES_VIEW');
		return $query->result();
	}

	public function getprograms(){
		$query = $this->db->get('PROGRAMS');
		return $query->result();
	}

	public function getLocation($proid){
		$this->db->select('*');
		$this->db->from('PROGRAMS');
		$this->db->where('PROGRAMS.PROG_ID',$proid);
		$this->db->join('LOCATION_TYP', 'LOCATION_TYP.LOC_NO = PROGRAMS.LOC_NO');
		return  $this->db->get()->row();
	}

	public function getstatus($proid,$start,$end){
		$this->db->where('PROG_ID',$proid);
		$this->db->where('COUR_STATUS',1);
		$this->db->where('COUR_START_DATE',$start);
		$this->db->where('COUR_END_DATE',$end);
		$query = $this->db->get('COURCES_CANDICATES_VIEW');
		return $query->result();
	}
	
	
	
	
}

