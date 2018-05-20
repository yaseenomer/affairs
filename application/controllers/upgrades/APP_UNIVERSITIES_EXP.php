<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APP_UNIVERSITIES_EXP  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_UNIVERSITIES_EXP');


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
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $this->load->view('upgrades/application_form/Application_form',$data);

    }

    public function create()
    {
        $this->load->view('upgrades/application_form/Application_form');
    }

    public function insert()
    {
       // var_dump($this->input->post());

        //$str = substr($str, 1); first charachters
        $x=$this->M_APP_UNIVERSITIES_EXP->maxid();
        $UNI_SER=$x+1;
        $items = array(
            'APP_ID' => 113  ,
           // 'UNI_SER' =>1,
           // 'APP_ID' => $this->input->post('APP_ID')  ,
           'UNI_SER' =>$UNI_SER,// $this->input->post('UNI_SER')  ,
            'UNI_EXP_TYPE' => $this->input->post('UNI_EXP_TYPE')  ,
            'UNI_EXP_SUB_TYPE' => $this->input->post('UNI_EXP_SUB_TYPE')  ,
            'START_DATE' => $this->input->post('START_DATE')  ,
            'END_DATE' => $this->input->post('END_DATE')  ,
            'UNV_ID' => $this->input->post('UNV_ID')  ,
            'UNIV_EXP_COLLEGE' => $this->input->post('UNIV_EXP_COLLEGE')  ,
            'UNIV_EXP_DEPART' => $this->input->post('UNIV_EXP_DEPART')  ,
            'UNIV_EXP_SPECIAL' => $this->input->post('UNIV_EXP_SPECIAL')  ,
            'EXP_COURCES' => $this->input->post('EXP_COURCES')  ,
            'PROJECTS_NUMBERS' => $this->input->post('PROJECTS_NUMBERS')  ,
            'NOTES' => $this->input->post('NOTES')  ,
            //'FILE_BATH' => $this->input->post('FILE_BATH')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_UNIVERSITIES_EXP->AddData($items);

        return redirect('upgrades/APP_UNIVERSITIES_EXP');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
