<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholar_extend_model extends CI_Model
{
    public function getALL()
    {
        $this->db->select('*');
        $this->db->from('SCHOLARSHIPS_EXTEND');
        $this->db->join('SCHOLARSHIPS', 'SCHOLARSHIPS.SCHOLAR_ID = SCHOLARSHIPS_EXTEND.SCHOLAR_ID');
        $this->db->join('EMP_VIEW', 'EMP_VIEW.EMP_NO = SCHOLARSHIPS.EMP_NO');
		return $this->db->get()->result();
    }

    public function getALLWhere($id)
    {
        $this->db->select('*');
        $this->db->from('SCHOLARSHIPS_EXTEND');
        $this->db->where('SCHOLARSHIPS_EXTEND.SCHOLAR_ID',$id);
        $this->db->join('SCHOLARSHIPS', 'SCHOLARSHIPS.SCHOLAR_ID = SCHOLARSHIPS_EXTEND.SCHOLAR_ID');
        return $this->db->get()->result();
    }
	
	public function getPrograms()
    {
        $this->db->where_in('PROG_TYP_ID',array(1,2,3,4,5));
		return  $this->db->get('PROGRAMS')->result();
    }
	
	public function getYears()
    {
		return $this->db->get('ACC_YEARS')->result();
    }

    public function getScholar($prog_id,$year_id){
        $this->db->select('*');
        $this->db->from('SCHOLARSHIPS');
        $this->db->where('SCHOLARSHIPS.PROG_ID',$prog_id);
        $this->db->where('SCHOLARSHIPS.YEAR_ID',$year_id);
        $this->db->join('EMP_VIEW', 'EMP_VIEW.EMP_NO = SCHOLARSHIPS.EMP_NO');
        return  $this->db->get()->result();

    }

    public function upload($data)
    {
        $this->db->insert('SCHOLARSHIPS_ATTACHMENTS', $data);
    }

	public function insert($data)
    {
        $this->db->insert('SCHOLARSHIPS_EXTEND', $data);
    }
	
	// public function find($currid)
    // {
    //     $this->db->where('EXPENS_ID', $currid);
    //     return $this->db->get('SCHOLARSHIPS_EXPENSES')->row();
    // }

    // public function update($id, $data)
    // {
    //     $this->db->where('EXPENS_ID', $id);
    //     $this->db->update('SCHOLARSHIPS_EXPENSES', $data);
    // }

    // public function deleteexpenses($id)
    // {
    //     return $this->db->delete('SCHOLARSHIPS_EXPENSES', array('EXPENS_ID' => $id));
    // }
}