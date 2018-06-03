<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APPLICATION_UNIV_EDU  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
       // $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');
        $this->load->model('upgrades/M_Edu');
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
        $data['levels'] = $this->M_Edu->getAccounts();
       // var_dump($data);
       $this->load->view('upgrades/application_form/Application_form',$data);

    }
    /************************************/
    public function show($id)
    {
        $LAN = $this->session->language;
       // $data['detail'] = $this->M_Application_Form->GetDataWhere($id);
        $data['pre'] = $this->M_APPLICATION_UNIV_EDU->GetData_PRE($id);
        $data['person'] = $this->M_APPLICATION_UNIV_EDU->GetData_PERSONAL($id);
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
         $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $data['levels'] = $this->M_Edu->getAccounts();

        if ($LAN==1) {
            $this->load->view('upgrades/application_form/University_Qualifications', $data);
        }
        else
        {
            $this->load->view('upgrades/application_form/University_Qualifications_en', $data);
        }
    }

    /***********************************/
    public function create()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $data['levels'] = $this->M_Edu->getAccounts();
        $this->load->view('upgrades/application_form/University_Qualifications',$data);
    }
/********************************************/
    public function create_en()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $data['levels'] = $this->M_Edu->getAccounts();
        $this->load->view('upgrades/application_form/University_Qualifications_en',$data);
    }
/*******************************************/
    public function insert()
    {
       // var_dump($this->input->post());
        /*********************************************/
        $APP_ID=105;
        $LAN = $this->session->language;
        /********************************************/
        $maxid=$this->M_APPLICATION_UNIV_EDU->maxid($APP_ID);
        $UNIV_EDU_SER=$maxid+1;
        //$str = substr($str, 1); first charachters
        $items = array(
            'APP_ID' => $APP_ID  ,
            'UNIV_EDU_SER' =>$UNIV_EDU_SER,
            'UNIV_EDU_TYPE' => $this->input->post('UNIV_EDU_TYPE')  ,
            'UNV_ID' => $this->input->post('UNV_ID')  ,
            'COUNTRY_NO' => $this->input->post('COUNTRY_NO')  ,
            'UNIV_EDU_COLLEGE' => $this->input->post('UNIV_EDU_COLLEGE')  ,
            'UNIV_EDU_SPECIAL' => $this->input->post('UNIV_EDU_SPECIAL')  ,
            'DATE_OF_ISSUED' => $this->input->post('DATE_OF_ISSUED')  ,
            'UNIV_EDU_GRADE' => $this->input->post('UNIV_EDU_GRADE')  ,
            'THESIS_TITLE' => $this->input->post('THESIS_TITLE')  ,
           // 'FILE_BATH' => attache($APP_ID,'UNI_EDU')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APPLICATION_UNIV_EDU->AddData($items);
        redirect('upgrades/APP_UNIVERSITIES_EXP/show/'.$APP_ID);
        /*********************************/
        if($this->M_APPLICATION_UNIV_EDU->checkAppIdExist($APP_ID)){
            $item = array(
                'FILE_BATH' =>attache($APP_ID,'UNI_EDU')  ,
                'UPDATE_DATE' => date('d-M-y')  ,
                'USR_NO' =>user()->USR_NO
            );
            $this->M_APPLICATION_UNIV_EDU->Updatedata($APP_ID,$item) ;
            $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
        }
        /***********************************/
       /* if($LAN==1) {
            return redirect('upgrades/APP_UNIVERSITIES_EXP/create');
        }
        else {
            return redirect('upgrades/APP_UNIVERSITIES_EXP/create_en');
        }*/
       //return redirect('upgrades/APPLICATION_UNIV_EDU');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
