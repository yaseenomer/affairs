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
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
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

    public function create()
    {
        $data['emp_details'] = $this->apply->empDetails('1000069');
        $data['emp_info'] = $this->apply->empInfo('1000069');
        $data['emp_grades'] = $this->apply->empGrades('1000069');
        $data['emp_holidays'] =  $this->apply->empHoliday('1000069');
        $data['emp_holiday'] =  $this->dateDiff($this->apply->empHoliday('1000069')->END_HOLYDAY);


        $this->load->view('upgrades/apply/apply',$data);
    }

    public function insert()
    {
        var_dump($this->input->post());
    }

    /**
     * @package  test and
     */
    public function t()
    {

        $data['emp_holiday'] = $this->apply->empHoliday('1000069');
        $data['emp_info'] = $this->apply->empInfo('1000069');
        $data['emp_grades'] = $this->apply->empGrades('1000069');
        var_dump($data);


    }

    /**
     * @param $date
     */
    public function dateDiff($date)
    {
        $diff = date_diff( date_create(date('Y-m-d')),date_create(date('Y-m-d', strtotime($date))));
        return $diff->format("%R%a");
    }

}
