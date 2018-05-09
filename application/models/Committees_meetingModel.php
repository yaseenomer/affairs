<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class Committees_meetingModel extends CI_Model

{
    public function getAccounts(){
		return $this->db->get('COMMITTEE_MEETINGS')->result();
	}
   //-------------------------------------------------------------------------------------	
	public function getAccounts1($offset , $current , $cond=''){
		if($cond != '')
		      $this->db->where($cond);
		return $this->db->get('COMMITTEE_MEETINGS' ,$offset , $current )->result();
	}
	 public function GetCommittees_meeting()
    {
      return  $query = $this->db->get('COMMITTEE_MEETINGS')->result();
    }
/**********************************/

    public function GetCommittees_meetingWhere($id)
    {
        $this->db->where('MEET_ID', $id);
        return $this->db->get('COMMITTEE_MEETINGS')->result();
    }
    /**********************************/

    public function GetCommittees_meeting_unlock()
    {
        $this->db->select('*');
        $this->db->where('CAND_TYP!=5');
        return $this->db->get('COURCES_CANDICATES_VIEW')->result();
    }

    /**********************************/

    public function GetCountrnameWhere($id)
    {
        $this->db->where('COUNTRY_NO', $id);
        return $this->db->get('COUNTRIES')->result();
    }
/**********************************/
    
    public function AddCommittees_meeting($data)
    {
        $this->db->insert('COMMITTEE_MEETINGS', $data);

    }
/**********************************/    
     public function UpdateCommittees_meeting($unid,$data)
    {
        $this->db->where('MEET_ID', $unid);
        $this->db->update('COMMITTEE_MEETINGS', $data);
    }
/**********************************/    
    public function DeleteCommittees_meeting($unid)
    {
       return  $this->db->delete('COMMITTEE_MEETINGS', array('MEET_ID' => $unid));
    }
/**********************************/	
public function getLevels(){
        $this->db->where('COMM_ID IS  not NULL');
		$this->db->order_by('COMM_TITLE', 'ASC');
		return $this->db->get('COMMITTEES')->result();
	}
     /*************************************************/
     public function get_all_level1(){
      return $this->db->from('COMMITTEES') 
                       //->where('g')
                       ->get()
                       ->result();
     }
}