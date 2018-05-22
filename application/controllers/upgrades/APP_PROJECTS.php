<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APP_PROJECTS  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_PROJECTS');
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
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $this->load->view('upgrades/application_form/Research_Projects',$data);
    }

    public function insert()
    {
       // var_dump($this->input->post());
        //$str = substr($str, 1); first charachters
        $maxid=$this->M_APP_PROJECTS->maxid(113);
        $PRO_SER=$maxid+1;
        $items = array(
            'APP_ID' => 113  ,
            //'PRO_SER' =>1 ,
            //'APP_ID' => $this->input->post('APP_ID')  ,
            'PRO_SER' =>$PRO_SER,// $this->input->post('PRO_SER')  ,
            'DATE_OF_PRO' => $this->input->post('DATE_OF_PRO')  ,
            'PRO_TITLE' => $this->input->post('PRO_TITLE')  ,
            'DESCRIPTION' => $this->input->post('DESCRIPTION')  ,
            'RESEARCHER_NAME' => $this->input->post('RESEARCHER_NAME')  ,
            'FILE_BATH' => $this->input->post('FILE_BATH')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_PROJECTS->AddData($items);
        return redirect('upgrades/APP_PROJECTS');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
