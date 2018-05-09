<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Scholarship extends CI_Model
{



    /**
     * @return mixed
     */
    public function getSchol()
    {
        $this->db->select('*');
        $this->db->from('SCHOLARSHIPS','EMPLOYEES');
        $this->db->join('EMPLOYEES_DETAILS', 'EMPLOYEES_DETAILS.EMP_NO = SCHOLARSHIPS.EMP_NO');
        $this->db->where('EMPLOYEES_DETAILS.COL_NO',user()->LOC_NO);
        $this->db->where('EMPLOYEES_DETAILS.DEP_NO',user()->DEP_ID);
        $this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = SCHOLARSHIPS.PROG_ID');
        return $this->db->get()->result();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function findSchol($id)
    {
        $this->db->select('*');
        $this->db->from('SCHOLARSHIPS');
        $this->db->where('SCHOLARSHIPS.SCHOLAR_ID',$id);
        $this->db->where('DEPARTMENTS_VIEWS.LOC_NO',user()->LOC_NO);
        $this->db->join('PROGRAMS', 'PROGRAMS.PROG_ID = SCHOLARSHIPS.PROG_ID');
        $this->db->join('EMPLOYEES', 'EMPLOYEES.EMP_NO = SCHOLARSHIPS.EMP_NO');
        $this->db->join('DEPARTMENTS_VIEWS', 'DEPARTMENTS_VIEWS.DEP_ID = SCHOLARSHIPS.DEP_ID');
        $this->db->join('UNIVERSITIES', 'UNIVERSITIES.UNV_ID = SCHOLARSHIPS.UNIVERSITY_TARGET');

        return $this->db->get()->row();
    }

    /**
     * @param $id
     * @param $phone
     */
    public function updatePhone($id,$phone)
    {
        $this->db->where('EMP_NO', $id);
        $this->db->update('EMPLOYEES', array('REL_PHONE'=> $phone));
    }

    /**
     * @param $id
     * @param $email
     */
    public function updateEmail($id,$email)
    {
        $this->db->where('EMP_NO', $id);
        $this->db->update('EMPLOYEES', array('E_MAIL'=> $email));
    }

    public function updateSchol($id,$data)
    {
        $this->db->where('SCHOLAR_ID', $id);
        $this->db->update('SCHOLARSHIPS', $data);
    }

    public function find_Schol($id)
    {
        $this->db->where('SCHOLAR_ID',$id);
        return  $this->db->get('SCHOLARSHIPS_VIEWS')->row();
    }


    /**
     * @param $id
     * @return array
     */
    public function getAttach($id)
        {
            $this->db->where('SCHOLAR_ID', $id);
            return $this->db->get('SCHOLARSHIPS_ATTACHMENTS')->result();
        }


    public function getAttachereType($id,$type)
    {
        $this->db->where('SCHOLAR_ID', $id);
        $this->db->where('ATT_TYPE', $type);
        return $this->db->get('SCHOLARSHIPS_ATTACHMENTS')->result();
    }

    /**
     * @return mixed
     */
    public function programs()
    {
        $this->db->where_in('PROG_TYP_ID', array(1,2,3,4,5));
        return $this->db->get('PROGRAMS')->result();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findProgram($id)
    {
        $this->db->where('PROG_ID', $id);
        return $this->db->get('PROGRAMS')->row();
    }


    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->db->get('COUNTRIES')->result();
    }

    /**
     * @param $emp
     * @return array
     */
    public function getQualifi($emp)
    {
        $this->db->where('EMP_NO',$emp);
        return $this->db->get('EMP_QUALIFICATIONS_VIEW')->result();

    }


    /**
     * @param $emp_id
     * @return mixed
     */
    public function findEmp($emp_id)
    {
        $this->db->where('EMP_NO', $emp_id);
        return $this->db->get('EMPLOYEES')->row();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findDep($id)
    {
        $this->db->where('DEP_ID',$id);
        $this->db->where('LOC_NO',user()->LOC_NO);
        return $this->db->get('DEPARTMENTS')->row();
    }

    /**
     * @return mixed
     */
    public function getPrograms()
    {
        return $this->db->get('PROGRAMS')->result();
    }

    /**
     * @return array
     */
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

    /**
     * @return mixed
     */
    public function findMax()
    {
        $this->db->select_max('SCHOLAR_ID','id');
        return  $this->db->get('SCHOLARSHIPS')->row();
    }


    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('SCHOLARSHIPS', $data);
    }

    /**
     * @param $data
     */
    public function upload($data)
    {
        $this->db->insert('SCHOLARSHIPS_ATTACHMENTS', $data);
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
     * @param $data
     */
    public function update_employee($id, $data)
    {
        $this->db->where('EMP_NO', $id);
        $this->db->update('EMPLOYEES', $data);
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
     * @param $name
     */
    public function addAttache($data)
    {
        $this->db->insert('SCHOLARSHIPS_ATTACHMENTS', $data);
    }




    /**
     * @param $id
     * @param $name
     * @param $ser
     * @return mixed
     */
    public function deleteAttache($id,$name,$ser)
    {
        return $this->db->delete('SCHOLARSHIPS_ATTACHMENTS', array('SCHOLAR_ID' => $id, 'FILE_BATH'=>$name, 'ATT_SER' =>$ser));
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

    /**
     * @return array
     */
    public function getEmps()
    {
        $this->db->where('COL_NO',user()->LOC_NO);
        $this->db->where('DEP_NO',user()->DEP_ID);
        return $this->db->get('EMPLOYEES_DETAILS')->result();

    }

    /**
     * @return mixed
     */
    public function getCollAndDep()
    {
        $this->db->where('LOC_NO',user()->LOC_NO);
        $this->db->where('DEP_ID',user()->DEP_ID);
        return $this->db->get('DEPARTMENTS_VIEWS')->row();

    }

    /**
     * @return array
     */
    public function getDeps()
    {
        $this->db->where('LOC_NO',user()->LOC_NO);
        return $this->db->get('DEPARTMENTS')->result();
    }


    /**
     * @return array
     */
    public function getCollages()
    {
        return $this->db->get('LOCATION_TYP')->result();
    }

    public function getUniversities()
    {
        return $this->db->get('UNIVERSITIES')->result();
    }

    public function getUniversitiesWhereCountry($id)
    {
        $this->db->where('COUNTRY_NO',$id);
        return $this->db->get('UNIVERSITIES')->result();
    }

    /**
     * @param $colID
     * @return array
     */
    public function getDepartWhereColID($colID)
    {
        $this->db->where('LOC_NO', $colID);
        return   $this->db->get('DEPARTMENTS')->result();
    }

    /**
     * @return array
     */
    public function nextDegree()
    {
        return   $this->db->get('ACADEMIC_DEGREES_NEXT')->result();
    }

    /**
     * @param $colID
     * @param $depID
     * @return array
     */
    public function getSpecial()
    {
        return   $this->db->get('SPECIALTIES')->result();
    }

    public function allEmpDetails($id)
    {
        $this->db->select('*');
        $this->db->from('EMP_GRADES_VIEW');
        $this->db->where('EMP_GRADES_VIEW.EMP_NO', $id);
        $this->db->join('EMPLOYEES', 'EMPLOYEES.EMP_NO = EMP_GRADES_VIEW.EMP_NO');
        return $this->db->get()->row();
    }


    /**
     * @param $data
     */
    public function add_details($data)
    {
        $this->db->insert('SCHOLARSHIPS_DETL', $data);
    }

    public function get_details($id)
    {
        $this->db->where('SCHOLAR_ID', $id);
        return   $this->db->get('SCHOLARSHIPS_DETL')->row();
    }

    public function sumExpByDolar($id)
    {
        $this->db->select_sum('AMOUNT');
        $this->db->where('SCHOLAR_ID', $id);
        $this->db->where('CURRENCY_ID', 3);
        return $this->db->get('SCHOLARSHIPS_EXPENSES')->row();

    }


    public function sumExpBound($id)
    {
        $this->db->select_sum('AMOUNT');
        $this->db->where('SCHOLAR_ID', $id);
        $this->db->where('CURRENCY_ID', 1);
        return $this->db->get('SCHOLARSHIPS_EXPENSES')->row();

    }







}