<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_APP_OTHER_EXPRIENCES extends CI_Model
{


   /* public function insert($data)
    {

    }*/
    /**********************************/
    public function maxid($id)
    {
        $this->db->select_max('EXP_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_OTHER_EXPRIENCES')->row()->EXP_SER ;
    }//end of method
    /*************************************/
    /**********************************/
    public function Getuniversity()
    {
        return  $query = $this->db->get('UNIVERSITIES')->result();
    }
    /**********************************/
    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('APP_OTHER_EXPRIENCES')->result();
    }
    /**********************************/

    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_OTHER_EXPRIENCES')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('APP_OTHER_EXPRIENCES', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('APP_OTHER_EXPRIENCES', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('APP_OTHER_EXPRIENCES', array('APP_ID' => $APP_ID));
    }
    /**********************************/


}