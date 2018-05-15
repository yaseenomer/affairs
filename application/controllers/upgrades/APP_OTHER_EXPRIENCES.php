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
        $this->load->view('upgrades/application_form/Application_form');

    }

    public function create()
    {
        $this->load->view('upgrades/application_form/Application_form');
    }

    public function insert()
    {
        var_dump($this->input->post());

        //$str = substr($str, 1); first charachters
        $items = array(

            'APP_ID' => $this->input->post('APP_ID')  ,
            'EXP_SER' => $this->input->post('EXP_SER')  ,
            'EXP_TYPE' => $this->input->post('EXP_TYPE')  ,
            'DESCRIPTION' => $this->input->post('DESCRIPTION')  ,
            'EXP_START_DATE' => $this->input->post('EXP_START_DATE')  ,
            'EXP_END_DATE' => $this->input->post('EXP_END_DATE')  ,
            'EXP_PLACE' => $this->input->post('EXP_PLACE')  ,
            'UNV_ID' => $this->input->post('UNV_ID')  ,
            'FILE_BATH' => $this->input->post('FILE_BATH')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_OTHER_EXPRIENCES->AddData($items);
        return redirect('/APP_OTHER_EXPRIENCES');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
