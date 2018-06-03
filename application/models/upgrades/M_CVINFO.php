<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_CVINFO extends CI_Model
{

    /**********************************/
   public function GetData($id)
    {
        $this->db->where('EMP_NO', $id);
        return  $query = $this->db->get('EMPLOYEES_TEACHERS')->result();
    }
    /**********************************/
    public function GetEmp_NO($id)
    {

         $this->db->select('EMP_NO');
         $this->db->where('APP_ID', $id);
        return  $query = $this->db->get('APPLICATION_FORM')->result();
    }
    /**********************************/

    public function GetData_cv($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_FORM_CD')->result();
    }
    /**********************************/

    public function GetData_PRE($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_PRE_EDU')->result();
    }
    /**********************************/

    public function GetData_univ($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APPLICATION_UNIV_EDU')->result();
    }
    /**********************************/

    public function GetData_EXP($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_UNIVERSITIES_EXP')->result();
    }
    /**********************************/

    public function GetData_PRO($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PROJECTS')->result();
    }
    /**********************************/

    public function GetData_PUB($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_PUBLICATIONS')->result();
    }
    /**********************************/

    public function GetData_Pepole($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('PUBLICATIONS_PARTS')->result();
    }
    /**********************************/

    public function GetData_EXPER($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_OTHER_EXPRIENCES')->result();
    }
    /**********************************/

    public function GetData_REFERENCES($id)
    {
        $this->db->where('APP_ID', $id);
        return $this->db->get('APP_CV_REFERENCES')->result();
    }
    /**********************************/

}