<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_APP_UNIVERSITIES_EXP extends CI_Model
{


   /* public function insert($data)
    {

    }*/
    /**********************************/
    public function maxid($id)
    {
        $this->db->select_max('UNI_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_UNIVERSITIES_EXP')->row()->UNI_SER ;
    }//end of method
    /*************************************/
    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('APP_UNIVERSITIES_EXP')->result();
    }
    /**********************************/
    public function GetData_UNIV($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_UNIV_EDU')->result();
    }
    /**********************************/

    /**********************************/
    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_UNIVERSITIES_EXP')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('APP_UNIVERSITIES_EXP', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('APP_UNIVERSITIES_EXP', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('APP_UNIVERSITIES_EXP', array('APP_ID' => $APP_ID));
    }
    /**********************************/
    public function checkAppIdExist($id)
    {
        return $this->db->where('APP_ID', $id)
                ->limit(1)
                ->count_all_results('APP_UNIVERSITIES_EXP') > 0;
    }

}