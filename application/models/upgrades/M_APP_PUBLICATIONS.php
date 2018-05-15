<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_APP_PUBLICATIONS extends CI_Model
{


   /* public function insert($data)
    {

    }*/

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


}