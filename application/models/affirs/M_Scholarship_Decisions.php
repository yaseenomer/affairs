<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Scholarship_Decisions  extends CI_Model
{

    /**
     * The decision of the head of department
     * @param $data
     */
    public function Decision($data)
    {
        $this->db->insert('SCHOLARSHIP_DECISIONS', $data);
    }


    /**
     * @param $id
     * @param $dec_type
     * @return mixed
     */
    public function getDecisions($id, $dec_type)
    {
        $this->db->where('SCHOLAR_ID',$id);
        $this->db->where('DECISION_TYP',$dec_type);
        return $this->db->get('SCHOLARSHIP_DECISIONS')->row();
    }

}