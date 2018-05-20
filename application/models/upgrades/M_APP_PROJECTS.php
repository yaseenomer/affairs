<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_APP_PROJECTS extends CI_Model
{


   /* public function insert($data)
    {

    }*/
    /**********************************/
    public function maxid($id)
    {
        $this->db->select_max('PRO_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PROJECTS')->row()->PRO_SER ;
    }//end of method
    /*************************************/
    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('APP_PROJECTS')->result();
    }
    /**********************************/

    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PROJECTS')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('APP_PROJECTS', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('APP_PROJECTS', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('APP_PROJECTS', array('APP_ID' => $APP_ID));
    }
    /**********************************/


}