<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Apply  extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->auth_model->middlewareAuth();

        /* load Model*/
        $this->load->model('upgrades/M_Apply','apply');

    }

    /**
     *
     */
    public function index()
    {



    }

    public function create($id = '1000069')
    {

        $data = $this->empDataAll($id);
        $this->load->view('upgrades/apply/apply',$data);
    }

    /**
     *  @array Insert Into Application_Form table
     */
    public function insert()
    {
       $this->apply->insert($this->dataMerage());
    }


    /**
     * @param $date
     */
    public function dateDiff($date)
    {
        $diff = date_diff( date_create(date('Y-m-d')),date_create(date('Y-m-d', strtotime($date))));
        return $diff->format("%R%a");
    }

    public function dataMerage()
    {
        $data1 = array(
            'APP_ID' => $this->apply->maxAppId() + 1,
            'APP_DATE' => date('d-M-y'),
            'APP_STATUS' => 0,
            'ENTRY_DATE' => date('d-M-y'),
            'UPDATE_DATE' => date('d-M-y'),
            'YEAR_ID' => date('Y'),
            'USR_NO' => user()->USR_NO
        );
        $data2 = $this->input->post();
        $data = array_merge($data1,$data2);
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function empDataAll($id)
    {
        $data['emp_details'] = $this->apply->empDetails($id);
        $data['emp_info'] = $this->apply->empInfo($id);
        $data['emp_grades'] = $this->apply->empGrades($id);
        $data['emp_holidays'] = $this->apply->empHoliday($id);
        $data['emp_holiday'] = $this->dateDiff($this->apply->empHoliday($id)->END_HOLYDAY);

        return $data;
    }

    public function tr()
    {
        $this->load->view('upgrades/apply/test');
    }

    public function t()
    {
        var_dump(attache(113,'cv'));

    }

    public function folder($folder)
    {
        return FCPATH.'uploads'.DIRECTORY_SEPARATOR.'attach'.DIRECTORY_SEPARATOR.$folder;
    }
}
