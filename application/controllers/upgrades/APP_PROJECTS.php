<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APP_PROJECTS  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
       // $this->file = new Symfony\Component\Filesystem\Filesystem();
       // $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_PROJECTS');
        $this->load->model('upgrades/M_APP_UNIVERSITIES_EXP');
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');
       // $this->load->model('upgrades/');
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
        $this->load->view('upgrades/application_form/Application_form',$data);

    }
    /************************************/
    public function show($id)
    {
        $LAN = $this->session->language;
        $data['UnivData'] = $this->M_APP_UNIVERSITIES_EXP->GetData_UNIV($id);
        $data['pre'] = $this->M_APPLICATION_UNIV_EDU->GetData_PRE($id);
        $data['person'] = $this->M_APPLICATION_UNIV_EDU->GetData_PERSONAL($id);
        $data['EXP'] = $this->M_APP_PROJECTS->GetData_EXP($id);
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');

        if ($LAN==1) {
            $this->load->view('upgrades/application_form/Research_Projects', $data);
        }
        else
        {
            $this->load->view('upgrades/application_form/Research_Projects_en', $data);
        }
    }

    /***********************************/
    public function create()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $this->load->view('upgrades/application_form/Research_Projects',$data);
    }
/*************************************************/
    public function create_en()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $this->load->view('upgrades/application_form/Research_Projects_en',$data);
    }
/************************************************/
    public function insert()
    {
       // var_dump($this->input->post());
        //$str = substr($str, 1); first charachters

        /*********************************************/
        $APP_ID= $this->input->post('app_id');
        $LAN = $this->session->language;
        /********************************************/

        $maxid=$this->M_APP_PROJECTS->maxid($APP_ID);
        $PRO_SER=$maxid+1;


        $items = array(
            'APP_ID' => $APP_ID  ,
            'PRO_SER' =>$PRO_SER,
            'DATE_OF_PRO' => $this->input->post('DATE_OF_PRO')  ,
            'PRO_TITLE' => $this->input->post('PRO_TITLE')  ,
            'DESCRIPTION' => $this->input->post('DESCRIPTION')  ,
            'RESEARCHER_NAME' => $this->input->post('RESEARCHER_NAME')  ,
            'FILE_BATH' => attache($APP_ID,'RESEARCH')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' =>25
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_PROJECTS->AddData($items);
        $this->M_APP_PROJECTS->UpdateAPP_STATUS($APP_ID,500);
        redirect('upgrades/APP_PUBLICATIONS/show/'.$APP_ID);
        
        /*********************************/
     /*   if($this->M_APP_PROJECTS->checkAppIdExist($APP_ID)){
            $item = array(
                'FILE_BATH' =>attache($APP_ID,'RESEARCH')  ,
                'UPDATE_DATE' => date('d-M-y')  ,
                'USR_NO' =>25
            );
            $this->M_APP_PROJECTS->Updatedata($APP_ID,$item) ;
            $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
        }*/
        /***********************************/
       /* if($LAN==1) {
            return redirect('upgrades/APP_PUBLICATIONS/create');
        }
        else {
            return redirect('upgrades/APP_PUBLICATIONS/create_en');
        }*/
        //return redirect('upgrades/APP_PROJECTS');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
