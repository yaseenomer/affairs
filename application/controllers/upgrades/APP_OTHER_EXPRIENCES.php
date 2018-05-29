<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APP_OTHER_EXPRIENCES  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_OTHER_EXPRIENCES');
        $this->load->model('upgrades/M_APP_UNIVERSITIES_EXP');
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');
        $this->load->model('upgrades/M_APP_PROJECTS');
        $this->load->model('upgrades/M_APP_PUBLICATIONS');

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
        $data['univ'] = $this->M_APP_OTHER_EXPRIENCES->Getuniversity();
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
        $data['PRO'] = $this->M_APP_PUBLICATIONS->GetData_PRO($id);
        $data['PUB'] = $this->M_APP_OTHER_EXPRIENCES->GetData_PUB($id);
        $data['PEPOLE'] = $this->M_APP_OTHER_EXPRIENCES->GetData_Pepole($id);
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');

        if ($LAN==1) {
            $this->load->view('upgrades/application_form/Administrative_Experience', $data);
        }
        else
        {
            $this->load->view('upgrades/application_form/Administrative_Experience_en', $data);
        }
    }

    /***********************************/
    public function create()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['univ'] = $this->M_APP_OTHER_EXPRIENCES->Getuniversity();
        $this->load->view('upgrades/application_form/Administrative_Experience',$data);
    }
/***************************************************/
    public function create_en()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['univ'] = $this->M_APP_OTHER_EXPRIENCES->Getuniversity();
        $this->load->view('upgrades/application_form/Administrative_Experience_en',$data);
    }
/**************************************************/
    public function insert()
    {
       // var_dump($this->input->post());

        //$str = substr($str, 1); first charachters

        /*********************************************/
        $APP_ID=105;
        $LAN = $this->session->language;
        /********************************************/
        $maxid=$this->M_APP_OTHER_EXPRIENCES->maxid($APP_ID);
        $EXP_SER=$maxid+1;

        $items = array(
            'APP_ID' => $APP_ID  ,
            'EXP_SER' => $EXP_SER,
            'EXP_TYPE' => $this->input->post('EXP_TYPE')  ,
            'DESCRIPTION' => $this->input->post('DESCRIPTION')  ,
            'EXP_START_DATE' => $this->input->post('EXP_START_DATE')  ,
            'EXP_END_DATE' => $this->input->post('EXP_END_DATE')  ,
            'EXP_PLACE' => $this->input->post('EXP_PLACE')  ,
            'UNV_ID' => $this->input->post('UNV_ID')  ,
           // 'FILE_BATH' => attache($APP_ID,'EXPERINCES')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_OTHER_EXPRIENCES->AddData($items);
        /*********************************/
        if($this->M_APP_OTHER_EXPRIENCES->checkAppIdExist($APP_ID)){
            $item = array(
                'FILE_BATH' =>attache($APP_ID,'EXPERINCES')  ,
                'UPDATE_DATE' => date('d-M-y')  ,
                'USR_NO' =>user()->USR_NO
            );
            $this->M_APP_OTHER_EXPRIENCES->Updatedata($APP_ID,$item) ;
            $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
        }
        /********************************/
        if($LAN==1) {
            return redirect('upgrades/APP_CV_REFERENCES/create');
        }
        else {
            return redirect('upgrades/APP_CV_REFERENCES/create_en');
        }
       // return redirect('upgrades/APP_OTHER_EXPRIENCES');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
