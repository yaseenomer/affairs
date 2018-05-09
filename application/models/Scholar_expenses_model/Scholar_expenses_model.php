<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholar_expenses_model extends CI_Model
{
    public function getALL()
    {
        $this->db->select('*');
        $this->db->from('SCHOLARSHIPS_EXPENSES');
        $this->db->join('SCHOLARSHIPS', 'SCHOLARSHIPS.SCHOLAR_ID = SCHOLARSHIPS_EXPENSES.SCHOLAR_ID');
        $this->db->join('EMP_VIEW', 'EMP_VIEW.EMP_NO = SCHOLARSHIPS.EMP_NO');
        $this->db->join('EXPENSES_TYPE', 'EXPENSES_TYPE.EXPENS_ID = SCHOLARSHIPS_EXPENSES.EXPENS_ID');
        $this->db->join('CURRENCIES', 'CURRENCIES.CURRENCY_ID = SCHOLARSHIPS_EXPENSES.CURRENCY_ID');
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

    public function getExpensestype()
    {
		return $this->db->get('EXPENSES_TYPE')->result();
    }

    public function getCurrency()
    {
		return $this->db->get('CURRENCIES')->result();
    }
	
	public function insert($data)
    {
        $this->db->insert('SCHOLARSHIPS_EXPENSES', $data);
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