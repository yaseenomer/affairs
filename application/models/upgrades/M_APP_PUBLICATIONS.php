<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_APP_PUBLICATIONS extends CI_Model
{


   /* public function insert($data)
    {

    }*/
    /**********************************/
    public function maxid($id)
    {
        $this->db->select_max('PUB_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PUBLICATIONS')->row()->PUB_SER ;
    }//end of method
    /*************************************/
    public function GetData_PRO($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PROJECTS')->result();
    }
    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('APP_PUBLICATIONS')->result();
    }
    /**********************************/

    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PUBLICATIONS')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('APP_PUBLICATIONS', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('APP_PUBLICATIONS', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('APP_PUBLICATIONS', array('APP_ID' => $APP_ID));
    }
    /**********************************/
    public function checkAppIdExist($id)
    {
        return $this->db->where('APP_ID', $id)
                ->limit(1)
                ->count_all_results('APP_PUBLICATIONS') > 0;
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