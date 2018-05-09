<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_programs extends CI_Model
{


    /**
     * @return mixed
     */
    public function getCollage()
    {
        return  $this->db->get('LOCATION_TYP')->result();
    }

    /**
     * @return mixed
     */
    public function getDepart()
    {
        return  $this->db->get('DEPARTMENTS')->result();
    }

    /**
     * @return mixed
     */
    public function getProgramType()
    {
        return  $this->db->get('PROGRAM_TYPES')->result();
    }

    /**
     * @return mixed
     */
    public function getDepartWhereColID($colID)
    {
        $this->db->where('LOC_NO', $colID);
        return   $this->db->get('DEPARTMENTS')->result();
    }


    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('PROGRAMS', $data);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return  $this->db->get('PROGRAMS')->result();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('PROGRAMS');
        $this->db->where('PROG_ID', $id);
        $this->db->join('DEPARTMENTS', 'DEPARTMENTS.DEP_ID = PROGRAMS.DEP_ID');
        $this->db->join('LOCATION_TYP', 'LOCATION_TYP.LOC_NO = PROGRAMS.LOC_NO');
        $this->db->join('PROGRAM_TYPES', 'PROGRAM_TYPES.PROG_TYP_ID = PROGRAMS.PROG_TYP_ID');
        return  $this->db->get()->row();

    }


    /**
     * @param $id
     * @param $data
     */
    public function update($id, $data)
    {
        $this->db->where('PROG_ID', $id);
        $this->db->update('PROGRAMS', $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return  $this->db->delete('PROGRAMS', array('PROG_ID' => $id ));
    }

    /**
     * @param $id
     */
    public function approve($id)
    {
        $this->db->where('PROG_ID', $id);
        $this->db->update('PROGRAMS', array('PROG_STATUS' => 1));
    }

    /**
     * @param $id
     */
    public function desApprove($id)
    {
        $this->db->where('PROG_ID', $id);
        $this->db->update('PROGRAMS', array('PROG_STATUS' => 0));
    }


}