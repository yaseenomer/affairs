<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class PUBLICATIONS_PARTS  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
       // $this->file = new Symfony\Component\Filesystem\Filesystem();
        //$this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_PUBLICATIONS_PARTS');
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
        $data['PUB'] = $this->M_PUBLICATIONS_PARTS->GetData_PUB($id);
        $data['PUBNAME'] = $this->M_PUBLICATIONS_PARTS->Getpubname($id);
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');

        if ($LAN==1) {
            $this->load->view('upgrades/application_form/part_Publications', $data);
        }
        else
        {
            $this->load->view('upgrades/application_form/part_Publications_en', $data);
        }
    }

    /***********************************/
    public function create()
    {
        $this->load->view('upgrades/application_form/Application_form');
    }

    public function insert()
    {
        //var_dump($this->input->post());

        //$str = substr($str, 1); first charachters
        /*********************************************/
        $APP_ID= $this->input->post('app_id');

        /********************************************/
        $maxid=$this->M_PUBLICATIONS_PARTS->maxid($APP_ID);
        $PUB_PRT_SER=$maxid+1;

        $items = array(
            'APP_ID' => $APP_ID  ,
           // 'PUB_SER' =>  1 ,
            'PUB_SER' => $this->input->post('PUB_SER')  ,
            'PUB_PRT_SER' =>$PUB_PRT_SER,// $this->input->post('PUB_PRT_SER')  ,
            'FRT_NAME_AR' => $this->input->post('FRT_NAME_AR')  ,
            'SND_NAME_AR' => $this->input->post('SND_NAME_AR')  ,
            'THR_NAME_AR' => $this->input->post('THR_NAME_AR')  ,
            'LST_NAME_AR' => $this->input->post('LST_NAME_AR')  ,
            'FRT_NAME_ENG' => $this->input->post('FRT_NAME_ENG')  ,
            'SND_NAME_ENG' => $this->input->post('SND_NAME_ENG')  ,
            'THR_NAME_ENG' => $this->input->post('THR_NAME_ENG')  ,
            'LST_NAME_ENG' => $this->input->post('LST_NAME_ENG')  ,
            'FILE_BATH' => attache($APP_ID,'PUBLICATIONS')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' =>25
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_PUBLICATIONS_PARTS->AddData($items);
        $this->M_PUBLICATIONS_PARTS->UpdateAPP_STATUS($APP_ID,700);
          redirect('upgrades/APP_OTHER_EXPRIENCES/show/'.$APP_ID);
        /*********************************/
     /*   if($this->M_PUBLICATIONS_PARTS->checkAppIdExist($APP_ID)){
            $item = array(
                'FILE_BATH' =>attache($APP_ID,'PUBLICATIONS')  ,
                'UPDATE_DATE' => date('d-M-y')  ,
                'USR_NO' =>25
            );
            $this->M_PUBLICATIONS_PARTS->Updatedata($APP_ID,$item) ;
            $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
        }*/
        /***********************************/
        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
        return redirect('upgrades/PUBLICATIONS_PARTS');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
