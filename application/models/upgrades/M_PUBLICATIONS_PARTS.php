<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_PUBLICATIONS_PARTS extends CI_Model
{


   /* public function insert($data)
    {

    }*/
    /**********************************/
    public function Getpubname($id)
    {
        $this->db->where('APP_ID', $id);
        return  $query = $this->db->get('APP_PUBLICATIONS')->result();

    }
    /**********************************/
    /**********************************/
    public function maxid($id)
    {
        $this->db->select_max('PUB_PRT_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('PUBLICATIONS_PARTS')->row()->PUB_PRT_SER ;
    }//end of method
    /*************************************/
    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('PUBLICATIONS_PARTS')->result();
    }
    /**********************************/

    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('PUBLICATIONS_PARTS')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('PUBLICATIONS_PARTS', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('PUBLICATIONS_PARTS', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('PUBLICATIONS_PARTS', array('APP_ID' => $APP_ID));
    }
    /**********************************/
    public function checkAppIdExist($id)
    {
        return $this->db->where('APP_ID', $id)
                ->limit(1)
                ->count_all_results('PUBLICATIONS_PARTS') > 0;
    }
    /**************************************/
    public function UpdateAPP_STATUS($APP_ID,$APP_STATUS)
    {
        $this->db->set('APP_STATUS', $APP_STATUS);
        $this->db->where('APP_ID', $APP_ID);
        $this->db->update('APPLICATION_FORM_CD');

    }
    /**************************************/
    /*************************************/
    public function GetData_PUB($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PUBLICATIONS')->result();
    }
    /**********************************/
}