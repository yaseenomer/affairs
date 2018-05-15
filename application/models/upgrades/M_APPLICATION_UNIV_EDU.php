<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_APPLICATION_UNIV_EDU extends CI_Model
{


   /* public function insert($data)
    {

    }*/

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


}