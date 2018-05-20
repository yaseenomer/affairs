<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_PUBLICATIONS_PARTS extends CI_Model
{


   /* public function insert($data)
    {

    }*/
    /**********************************/
    public function maxid($id)
    {
        $this->db->select_max('PUB_SER');
        $this->db->where('APP_ID', $id);
        return $this->db->get('PUBLICATIONS_PARTS')->row()->PUB_SER ;
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


}