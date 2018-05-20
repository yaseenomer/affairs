<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_name  extends CI_Controller {
 
 public function __construct()
    {
        parent::__construct();
        $this->load->model('EmpNameModel');
       $this->auth_model->middlewareAuth();

    }
	
	public function index()
	{
	        $data['approve']     = $this->session->flashdata('approve');
            $data['addcon']      = $this->session->flashdata('addcon');
            $data['editcon']     = $this->session->flashdata('editcon');
            $data['deletecon']   = $this->session->flashdata('deletecon');
            $data['dis_approve'] = $this->session->flashdata('dis_approve');
           	$data['colall'] = $this->EmpNameModel->getCollage();
          //  $data['generals']    = $this->EmpNameModel->GetEmp();
           
	    	$this->load->view('Employees/Employees_name',$data);
	}
    
    public function Search()
    {
         $EMP_NAME = $this->input->post('EMP_NAME');

        $NAME= iconv("UTF-8","ISO-8859-6",$EMP_NAME);
        $data =  $this->EmpNameModel->GetEmpWhere($NAME);
          var_dump($data);
        // return redirect('/Emp_name');
    }
    //*****************************************************//
	public function getdpewhere (){
	    if ($this->session->user->USR_NO == 10) {
		$departs = $this->EmpNameModel->getdepWhereloc($this->input->post('colid'));
		foreach ($departs as $depart){
           echo "<option value='".$depart->DEP_ID."'>".$depart->DEP_NAME."</option>";
		}
        }
         else {
            return redirect('auth/login');

        } 
}
/************************/
    public function get_emp()
    {
        $res= $this->EmpNameModel->get_emp(
        $this->input->post('loc_id'),
        $this->input->post('DEP_ID')
        );
        echo iconv('windows-1256','UTF-8',$res);

    } //end of method
}
