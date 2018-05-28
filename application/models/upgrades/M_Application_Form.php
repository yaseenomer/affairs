<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Application_Form extends CI_Model
{


   /* public function insert($data)
    {

    }*/
    /**********************************/

    /**********************************/
    public function getallup()
    {
        $this->db->select('*');
        $this->db->from('APPLICATION_FORM');
        $this->db->order_by('APP_ID','desc');
        $this->db->join('EMPLOYEES_INFO', 'EMPLOYEES_INFO.EMP_NO = APPLICATION_FORM.EMP_NO');
       return $this->db->get()->result();
      //  return $this->db->get()->row();
    }
    /**********************************/
    public function GetData()
    {
        return  $query = $this->db->get('APPLICATION_FORM_CD')->result();
    }
    /**********************************/

    public function GetDataWhere($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_FORM_CD')->result();
    }
    /**********************************/

    public function AddData($data)
    {
        $this->db->insert('APPLICATION_FORM_CD', $data);

    }
    /**********************************/
    public function Updatedata($conid,$data)
    {
        $this->db->where('APP_ID', $conid);
        $this->db->update('APPLICATION_FORM_CD', $data);
    }
    /**********************************/
    public function DeleteData($APP_ID)
    {
        return  $this->db->delete('APPLICATION_FORM_CD', array('APP_ID' => $APP_ID));
    }
    /**********************************/
    public function checkAppIdExist($id)
    {
                return $this->db->where('APP_ID', $id)
                ->limit(1)
                ->count_all_results('APPLICATION_FORM_CD') > 0;
    }


}