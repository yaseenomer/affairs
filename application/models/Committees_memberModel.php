<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('content-type: text/html; charset =  utf-8');

class Committees_memberModel extends CI_Model

{
    public function getAccounts(){
		return $this->db->get('COMMITTEE_MEMBERS')->result();
	}
   //-------------------------------------------------------------------------------------	
	public function getAccounts1($offset , $current , $cond=''){
		if($cond != '')
		      $this->db->where($cond);
		return $this->db->get('COMMITTEE_MEMBERS' ,$offset , $current )->result();
	}
	 public function GetCommittees_member()
    {
      return  $query = $this->db->get('COMMITTEE_MEMBERS')->result();
    }
/**********************************/

    public function GetCommittees_memberWhere($id,$id1)
    {
        $this->db->where('COMM_ID ='.$id .' '. ' and EMP_NO=', $id1);
        return $this->db->get('COMMITTEE_MEMBERS')->result();
    }




/**********************************/
    
    public function AddCommittees_member($data)
    {
        $this->db->insert('COMMITTEE_MEMBERS', $data);

    }
/**********************************/    
     public function UpdateCommittees_member($unid,$empno,$data)
    {
        $this->db->where('COMM_ID', $unid);
        $this->db->where('EMP_NO', $empno);
        $this->db->update('COMMITTEE_MEMBERS', $data);
    }
/**********************************/    
    public function DeleteCommittees_member($unid,$emp)
    {
       return  $this->db->delete('COMMITTEE_MEMBERS', array('COMM_ID' => $unid,
           'EMP_NO' =>$emp

       ));
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
     /**********************************/
    public function getEmps()
    {

        return $this->db->from('EMPLOYEES')
            //->where('g')
            ->get()
            ->result();
    }
    /**************************************/
    public function getEmpsname($id)
    {
        $this->db->select('EMP_NAME');
        $this->db->from('EMPLOYEES');
        $this->db->where('EMP_NO', $id);
        return $this->db->get()->result();
    }
}