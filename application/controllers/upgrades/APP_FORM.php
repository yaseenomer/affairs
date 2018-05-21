<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class APP_FORM  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_CV_REFERENCES');
        $this->load->model('upgrades/M_APP_OTHER_EXPRIENCES');
       // $this->load->model('upgrades/M_APP_PROJECTS');
       // $this->load->model('upgrades/M_APP_PUBLICATIONS');
       // $this->load->model('upgrades/M_APP_UNIVERSITIES_EXP');
       // $this->load->model('upgrades/M_Application_Form');
        $this->load->model('upgrades/M_Edu');
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');
       // $this->load->model('upgrades/M_PUBLICATIONS_PARTS');
    }

    /**
     *
     */
    public function index()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['qual'] = $this->M_APP_CV_REFERENCES->GetACADEMIC_DEGREES_NEXT();
        $data['univ'] = $this->M_APP_OTHER_EXPRIENCES->Getuniversity();
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $data['levels'] = $this->M_Edu->getAccounts();


        // var_dump($data);
        $this->load->view('upgrades/application_form/Application_form',$data);


    }

}
