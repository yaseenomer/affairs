<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =UTF-8');

class Course_instruct_mod extends CI_Model{
	public function getInstructor(){
      return  $query = $this->db->get('INSTRUCTORS')->result();
    }
	public function getProgram(){
      return  $query = $this->db->get('PROGRAMS')->result();
    }


	public function getInstrIdwhere(){
		$this->db->select('*');
        $this->db->from('INSTRUCTORS');
        $this->db->join('COURCES_INSTRUCTORS', 'COURCES_INSTRUCTORS.INS_ID = INSTRUCTORS.INS_ID');
		$this->db->join('COURCES', 'COURCES.COUR_ID = COURCES_INSTRUCTORS.COUR_ID');
		$this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = COURCES.PROG_ID');
		return $this->db->get()->result();
	}
	
	public function getInstrInfowhere($instid,$courid){
		$this->db->select('*');
        $this->db->from('INSTRUCTORS');
		$this->db->where('COURCES_INSTRUCTORS.INS_ID', $instid);
		$this->db->where('COURCES_INSTRUCTORS.COUR_ID', $courid);
        $this->db->join('COURCES_INSTRUCTORS', 'COURCES_INSTRUCTORS.INS_ID = INSTRUCTORS.INS_ID');
		$this->db->join('COURCES', 'COURCES.COUR_ID = COURCES_INSTRUCTORS.COUR_ID');
		$this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = COURCES.PROG_ID');
		return $this->db->get()->result();
	}
	
	public function getProgramJoinCourse(){
		$this->db->select('*');
        $this->db->from('PROGRAMS');
        $this->db->join('COURCES', 'COURCES.PROG_ID = PROGRAMS.PROG_ID');
        return  $this->db->get()->result();
	}
	
	public function getCoursewhereProgram($proid){
		$this->db->where('PROG_ID', $proid);
        $query =  $this->db->get('COURCES');
		return $query->row();	
	}
	
	public function addCourse_instruct($data){
        $this->db->insert('COURCES_INSTRUCTORS', $data);
    }
	
	public function getInstCourEdit($courid,$instid){
		$this->db->where('COUR_ID', $courid);
		$this->db->where('INS_ID', $instid);
        $query =  $this->db->get('COURCES_INSTRUCTORS');
		return $query->result();
	}
	public function updateCourse_instruct($insid,$couid,$data){
		$this->db->where('INS_ID', $insid);
		$this->db->where('COUR_ID', $couid);
        $this->db->update('COURCES_INSTRUCTORS', $data);
		
	}
	
	
}