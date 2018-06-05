<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APP_UNIVERSITIES_EXP  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
       // $this->file = new Symfony\Component\Filesystem\Filesystem();
       // $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_UNIVERSITIES_EXP');
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');


    }
    /************************************/
    public function show($id)
    {
        $LAN = $this->session->language;
        $data['UnivData'] = $this->M_APP_UNIVERSITIES_EXP->GetData_UNIV($id);
        $data['pre'] = $this->M_APPLICATION_UNIV_EDU->GetData_PRE($id);
        $data['person'] = $this->M_APPLICATION_UNIV_EDU->GetData_PERSONAL($id);
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();

        if ($LAN==1) {
            $this->load->view('upgrades/application_form/Supervisory_Experience', $data);
        }
        else
        {
            $this->load->view('upgrades/application_form/Supervisory_Experience_en', $data);
        }
    }

    /***********************************/
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
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $this->load->view('upgrades/application_form/Supervisory_Experience',$data);
    }
/********************************************/
    public function create_en()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $this->load->view('upgrades/application_form/Supervisory_Experience_en',$data);
    }
/*******************************************/
    public function insert()
    {
       // var_dump($this->input->post());

        //$str = substr($str, 1); first charachters
        /*********************************************/
        $APP_ID= $this->input->post('app_id');
        $LAN = $this->session->language;
        /********************************************/

        $maxid=$this->M_APP_UNIVERSITIES_EXP->maxid($APP_ID);
        $UNI_SER=$maxid+1;
        $items = array(
            'APP_ID' => $APP_ID  ,
            'UNI_SER' =>$UNI_SER,
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
            'FILE_BATH' =>  attache($APP_ID,'EXPERINCES')     ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' =>25
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_UNIVERSITIES_EXP->AddData($items);
        redirect('upgrades/APP_PROJECTS/show/'.$APP_ID);
       
        
      /*  if($LAN==1) {
            return redirect('upgrades/APP_PROJECTS/create');
        }
        else {
            return redirect('upgrades/APP_PROJECTS/create_en');
        }*/
       // return redirect('upgrades/APP_UNIVERSITIES_EXP');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
