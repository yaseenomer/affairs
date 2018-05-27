<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Edu extends CI_Model
{

    public function getAccounts(){
        return $this->db->get('COUNTRIES')->result();
    }
/************************************/
    public function maxid($id)
    {
        $this->db->select_max('PRE_EDU_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_PRE_EDU')->row()->PRE_EDU_SER ;
    }//end of method
    /*************************************/
   /* public function insert($data)
    {

    }*/

    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('APPLICATION_PRE_EDU')->result();
    }
    /**********************************/

    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_PRE_EDU')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('APPLICATION_PRE_EDU', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('APPLICATION_PRE_EDU', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('APPLICATION_PRE_EDU', array('APP_ID' => $APP_ID));
    }
    /**********************************/
    public function checkAppIdExist($id)
    {
        return $this->db->where('APP_ID', $id)
                ->limit(1)
                ->count_all_results('APPLICATION_PRE_EDU') > 0;
    }

}