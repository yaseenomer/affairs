<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_courses extends CI_Model
{


    /**
     * @return mixed
     */
    public function getCourse()
    {
        $this->db->select('*');
        $this->db->from('COURCES');
        $this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = COURCES.PROG_ID');
        $this->db->join('COUNTRIES', 'COUNTRIES.COUNTRY_NO = COURCES.COUNTRY_NO');
        return $this->db->get()->result();
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->db->get('COUNTRIES')->result();
    }

    /**
     * @return mixed
     */
    public function getPrograms()
    {
        return $this->db->get('PROGRAMS')->result();
    }

    public function getTeachers()
    {
        return $this->db->get('INSTRUCTORS')->result();
    }

    /**
     * @param $id
     * @return mixed
     */

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('COURCES');
        $this->db->where('COUR_ID', $id);
        $this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = COURCES.PROG_ID');
        $this->db->join('COUNTRIES', 'COUNTRIES.COUNTRY_NO = COURCES.COUNTRY_NO');
        $data = $this->db->get();
        return $courses = $data->row();

    }

    public function findMax()
    {
        $this->db->select_max('COUR_ID','id');
        return  $this->db->get('COURCES')->row();
    }


    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('COURCES', $data);
    }

    /**
     * @param $data
     */
    public function upload($data)
    {
        $this->db->insert('COURCES_ATTACHMENTS', $data);
    }

    /**
     * @param $data
     */
    public function insertToCourIns($data)
    {
        $this->db->insert('COURCES_INSTRUCTORS', $data);
    }


    /**
     * @param $id
     * @param $data
     */

    public function update($id, $data)
    {
        $this->db->where('COUR_ID', $id);
        $this->db->update('COURCES', $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->db->delete('COURCES', array('COUR_ID' => $id));
    }

    /**
     * @param $id
     */
    public function approve($id)
    {
        $this->db->where('COUR_ID', $id);
        $this->db->update('COURCES', array('COUR_STATUS' => 1));
    }

    /**
     * @param $id
     */
    public function desApprove($id)
    {
        $this->db->where('COUR_ID', $id);
        $this->db->update('COURCES', array('COUR_STATUS' => 0));
    }


}