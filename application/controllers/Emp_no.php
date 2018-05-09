<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_no  extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('EmpNoModel');
      //  $this->auth_model->middlewareAuth();

    }
    /***********************************************************/
	public function index()
	{
	        $data['approve']     = $this->session->flashdata('approve');
            $data['addcon']      = $this->session->flashdata('addcon');
            $data['editcon']     = $this->session->flashdata('editcon');
            $data['deletecon']   = $this->session->flashdata('deletecon');
            $data['dis_approve'] = $this->session->flashdata('dis_approve');
            //$data['generals'] = $this->EmpnoModel->GetEmpname();
		    $this->load->view('Employees/Employees_NO');
	}
    /***********************************************************/
    public function Search()
    {
         $EMP_NO = $this->input->post('EMP_NO');
         $data['generals']   =  $this->EmpNoModel->GetEmpnameWhere($EMP_NO);
          $this->load->view('Employees/EmployeesInfo',$data);
         // var_dump($data);
        // return redirect('/Emp_name');
    }  
}
