<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_name  extends CI_Controller {
 
 public function __construct()
    {
        parent::__construct();
        $this->load->model('EmpNameModel');
      //  $this->auth_model->middlewareAuth();

    }
	
	public function index()
	{
	        $data['approve']     = $this->session->flashdata('approve');
            $data['addcon']      = $this->session->flashdata('addcon');
            $data['editcon']     = $this->session->flashdata('editcon');
            $data['deletecon']   = $this->session->flashdata('deletecon');
            $data['dis_approve'] = $this->session->flashdata('dis_approve');
          //  $data['generals']    = $this->EmpNameModel->GetEmp();
           
	    	$this->load->view('Employees/Employees_name');
	}
    
    public function Search()
    {
         $EMP_NAME = $this->input->post('EMP_NAME');
        // $NAME= iconv("UTF-8","ISO-8859-1",$EMP_NAME);
         //echo iconv("UTF-8", "ISO-8859-1", $myUnicodeString);
        // $NAME =  iconv("windows-1256" , "utf-8",$EMP_NAME);
        // $NAME =  iconv("windows-1256","windows-1256" , $EMP_NAME);
       // $NAME =  iconv("utf-8","windows-1256" , $EMP_NAME);
      //  $NAME =  iconv("windows-1256","utf-8" , $EMP_NAME);
     // $NAME= mb_detect_encoding($EMP_NAME, 'UTF-8, ISO-8859-1, ASCII');
     // // $NAME=iconv("utf-8","windows-1256",$EMP_NAME);
      //$NAME=iconv("utf-8","windows-1256",$EMP_NAME);
     // $R=iconv("windows-1256","ISO-8859-1",$NAME);
      // $NAME=mb_convert_encoding($EMP_NAME,"ISO-8859-1");

        $NAME= iconv("UTF-8","ISO-8859-6",$EMP_NAME);
        $data =  $this->EmpNameModel->GetEmpWhere($NAME);
          var_dump($data);
        // return redirect('/Emp_name');
    }
    
}
