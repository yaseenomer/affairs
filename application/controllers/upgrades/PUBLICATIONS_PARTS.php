<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class PUBLICATIONS_PARTS  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_PUBLICATIONS_PARTS');
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

    public function create()
    {
        $this->load->view('upgrades/application_form/Application_form');
    }

    public function insert()
    {
        //var_dump($this->input->post());

        //$str = substr($str, 1); first charachters
        /*********************************************/
        $APP_ID=105;

        /********************************************/
        $maxid=$this->M_PUBLICATIONS_PARTS->maxid($APP_ID);
        $PUB_PRT_SER=$maxid+1;

        $items = array(
            'APP_ID' => $APP_ID  ,
            'PUB_SER' =>  1 ,
            //'PUB_SER' => $this->input->post('PUB_SER')  ,
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
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_PUBLICATIONS_PARTS->AddData($items);
        return redirect('upgrades/PUBLICATIONS_PARTS');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
