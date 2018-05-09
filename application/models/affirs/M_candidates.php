<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_candidates  extends CI_Model
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
        return   $this->db->get()->result();
    }

    public function getCands()
    {
        $this->db->select('*');
        $this->db->from('COURCES_CANDICATES_VIEW');
        return   $this->db->get()->result();

    }
/******************************/
    public function getCollageWhere($id)
    {
        $this->db->where('LOC_NO', $id);
        $query = $this->db->get('LOCATION_TYP');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }
    /**************************************/
public function getEmpCand($id){

    $this->db->select('*');
    $this->db->from('COURCES_CANDICATES_VIEW');
    $this->db->where('COUR_ID',$id);
    return   $this->db->get()->result();


}
/*********************************/
    public function getCollage()
    {
        $query = $this->db->get('LOCATION_TYP');
        $this->db->order_by('LOC_NO','ASC');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }
    /***********************************/
    public function getcandempWhere($id,$s)
    {
        $this->db->distinct('*');
        $this->db->from('COURCES_CANDICATES_VIEW');
        $this->db->where('LOC_NO',$id);
     $this->db->where('COUR_ID',$s);
        return   $this->db->get()->result();


    }
    //---------------------------------
    public function getCols($cid){

    }
/*************************************/
    public function getempWhere($id)
    {
       /* $cols = $this->getCols($id);

       $this->db->select('LOC_NO,LOC_NAME');
        $this->db->from('COURCES_CANDICATES_VIEW');
        $this->db->where('COUR_ID',$id);
        $this->db->where_in('LOC_NO',$cols);
        return   $this->db->get()->result();*/
        $this->db->select('LOC_NO,LOC_NAME');
        $this->db->from('COURCES_CANDICATES_VIEW');
        $this->db->where('COUR_ID',$id);
        $result = $this->db->get()->result();

        $x = array();
        foreach($result as $r ){
            if(!array_key_exists($r->LOC_NO, $x)) {
                $x[$r->LOC_NO] = $r->LOC_NAME;
            }
        }

        return $x;

    }
    /*************************************/
public function getEmpinfo($id,$cou){
    $this->db->select('*');
    $this->db->from('COURCES_CANDICATES_VIEW');
    $this->db->where('EMP_NO',$id);

  /*  $this->db->join('EMPLOYEES_HR', 'COURCES_CANDICATES.EMP_NO = EMPLOYEES_HR.EMP_NO');
    $this->db->join('COURCES', 'COURCES.COUR_ID = COURCES_CANDICATES.COUR_ID');
    $this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = COURCES.PROG_ID');*/

    return   $this->db->get()->result();

}
    /**
     * @return mixed
     */
    public function getEmps()
    {
        $this->db->select('*');
        $this->db->from('EMPLOYEES_HR');
        $this->db->where('COL_NO',user()->LOC_NO);
        $this->db->join('EMP_LOCATIONS_HR', 'EMP_LOCATIONS_HR.EMP_NO = EMPLOYEES_HR.EMP_NO');
        return  $this->db->get()->result();
    }
public  function getcountcadidate($EMP_NO)
{
    $this->db->select('*');
    $this->db->from('COURCES_CANDICATES', 'PROGRAMS', 'EMPLOYEES_HR', 'COURCES');
    $this->db->where('EMP_NO', $EMP_NO);
    $this->db->join('EMPLOYEES_HR', 'COURCES_CANDICATES.EMP_NO = EMPLOYEES_HR.EMP_NO');
    $this->db->join('COURCES', 'COURCES.COUR_ID = COURCES_CANDICATES.COUR_ID');
    $this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = COURCES.PROG_ID');
    $this->db->join('LOCATION_TYP', 'LOCATION_TYP.LOC_NO = COURCES_CANDICATES.LOC_NO');
    return $this->db->get()->result();
}



    /**
     * @return mixed
     */
    public function getEmpLoc()
    {
        return  $this->db->get('EMP_LOCATIONS_HR')->result();
    }

    /**
     * @param $id
     * @return mixed
     */

    public function find($id)
    {
        $this->db->select('COURCES_CANDICATES.*,EMPLOYEES.EMP_NO,EMPLOYEES.EMP_NAME,PROGRAMS.*');
        $this->db->from('COURCES_CANDICATES','EMPLOYEES','PROGRAMS');
        $this->db->where('COUR_ID', $id);
        $this->db->join('EMPLOYEES', 'EMPLOYEES.EMP_NO = COURCES_CANDICATES.EMP_NO');
        $this->db->join('COURCES', 'COURCES.COUR_ID = COURCES_CANDICATES.COUR_ID');
        $this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = COURCES.PROG_ID');
        return   $this->db->get()->row();

    }


    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('COURCES_CANDICATES', $data);
    }


    /**
     * @param $id
     * @param $data
     */

    public function update($id, $data)
    {
        $this->db->where('COUR_ID', $id);
        $this->db->update('COURCES_CANDICATES', $data);
    }
    /**********************accept**************/
    public function update2($id, $d)
    {
        $this->db->where('EMP_NO', $id);
        $this->db->where('COUR_ID', $d);

        $this->db->update('COURCES_CANDICATES', array('CAND_TYP' => 1 ));
    }
    /*********************reject cand***************/
    public function update3($id, $d)
    {
        $this->db->where('EMP_NO', $id);
        $this->db->where('COUR_ID', $d);

        $this->db->update('COURCES_CANDICATES', array('CAND_TYP' => 3 ));
    }
    /******************lock cand******************/
    public function update4( $d)
    {
       // $this->db->where('EMP_NO', $id);
        $this->db->where('COUR_ID', $d);

        $this->db->update('COURCES_CANDICATES', array('CAND_TYP' => 5 ));
    }
    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return  $this->db->delete('COURCES_CANDICATES', array('COUR_ID' => $id ));
    }
    /***********************************/

    public function GetCommittees_meeting_unlock()
    {
        $this->db->select('*');
        $this->db->where('CAND_TYP!=5');
        return $this->db->get('COURCES_CANDICATES_VIEW')->result();
    }

}