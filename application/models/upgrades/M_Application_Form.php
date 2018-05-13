<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Application_Form extends CI_Model
{


   /* public function insert($data)
    {

    }*/

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


}