<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Apply extends CI_Model
{


    /**
     * @param $id
     * @return mixed
     */
    public function findApplicationForm($id)
    {
        $this->db->where('APP_ID',$id);
        return $this->db->get('APPLICATION_FORM')->row();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function empDetails($id)
    {
          $this->db->where('EMP_NO',$id);
          return $this->db->get('EMPLOYEES_DETAILS')->row();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function empInfo($id)
    {
        $this->db->where('EMP_NO',$id);
        return $this->db->get('EMPLOYEES_INFO')->row();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function empGrades($id)
    {
        $this->db->where('EMP_NO',$id);
        return $this->db->get('EMP_GRADES_VIEW')->row();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function empHoliday($id)
    {
        $this->db->where('EMP_NO',$id);
        return $this->db->get('EMP_HOLYDAIES_VIEW')->row();
    }




    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('APPLICATION_FORM', $data);
    }


    /**
     * @return CI_DB_result
     */
    public function maxAppId()
    {
        $this->db->select_max('APP_ID','id');
        return $this->db->get('APPLICATION_FORM')->row()->id;
    }




}