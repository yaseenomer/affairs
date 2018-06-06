<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_APPLICATION_UNIV_EDU extends CI_Model
{
    /**********************************/
    public function Getuniversity()
    {
        return  $query = $this->db->get('UNIVERSITIES')->result();
    }
    /**********************************/
    public function maxid($id)
    {
        $this->db->select_max('UNIV_EDU_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_UNIV_EDU')->row()->UNIV_EDU_SER ;
    }//end of method
    /*************************************/
   /* public function insert($data)
    {

    }*/
    /**********************************/
    public function GetData_PRE($id)
    {
        $this->db->where('APP_ID', $id);
        return  $query = $this->db->get('APPLICATION_PRE_EDU')->result();
    }
    /**********************************/
    /**********************************/
    public function GetData_PERSONAL($id)
    {
        $this->db->where('APP_ID', $id);
        return  $query = $this->db->get('APPLICATION_FORM_CD')->result();
    }
    /**********************************/
    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('APPLICATION_UNIV_EDU')->result();
    }
    /**********************************/

    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_UNIV_EDU')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('APPLICATION_UNIV_EDU', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('APPLICATION_UNIV_EDU', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('APPLICATION_UNIV_EDU', array('APP_ID' => $APP_ID));
    }
    /**********************************/
    public function checkAppIdExist($id)
    {
        return $this->db->where('APP_ID', $id)
                ->limit(1)
                ->count_all_results('APPLICATION_UNIV_EDU') > 0;
    }
    /**************************************/
    public function UpdateAPP_STATUS($APP_ID,$APP_STATUS)
    {
        $this->db->set('APP_STATUS', $APP_STATUS);
        $this->db->where('APP_ID', $APP_ID);
        $this->db->update('APPLICATION_FORM_CD');

    }
    /**************************************/
}