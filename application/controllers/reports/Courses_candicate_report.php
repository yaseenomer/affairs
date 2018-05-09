<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class Courses_candicate_report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reports/Courses_candicate_model');
        $this->auth_model->middlewareAuth();

    }
/*****************************/

	public function index(){
        $this->load->view('reports/candicate_Main');
    }
    public function show1(){
        $data['programs'] = $this->Courses_candicate_model->getprograms();
        $this->load->view('reports/candicate_choose', $data);
    }
    public function show2(){
        $data['programs'] = $this->Courses_candicate_model->getprograms();
        $this->load->view('reports/candicate_choose2', $data);
    }

    public function get(){
        $proid = $this->input->post('PROG_ID');
        $this->session->set_userdata('id',$proid);
        $data['generals'] = $this->Courses_candicate_model->Getcandicate($proid);
        $data['Location'] = $this->Courses_candicate_model->getLocation($proid);
        $this->load->view('reports/Courses_candicate_show', $data);
    }

    public function pdf(){
        $data['generals'] = $this->Courses_candicate_model->Getcandicate($this->session->id);
        $data['Location'] = $this->Courses_candicate_model->getLocation($this->session->id);
        $this->load->view('reports/candidate_course_print', $data);
    }

    public function get2(){
        $proid = $this->input->post('PROG_ID');
        $start = $this->input->post('START_DATE');
        $end = $this->input->post('END_DATE');
        $this->session->set_userdata('id',$proid);
        $data['generals'] = $this->Courses_candicate_model->getstatus($proid,$start,$end);
        var_dump($data); exit();
        $data['Location'] = $this->Courses_candicate_model->getLocation($proid);
        $this->load->view('reports/Courses_candicate_show2', $data);

    }


}
	
	