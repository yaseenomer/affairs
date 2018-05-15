<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APPLICATION_UNIV_EDU  extends CI_Controller
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
            'UNIV_EDU_SER' => $this->input->post('UNIV_EDU_SER')  ,
            'UNIV_EDU_TYPE' => $this->input->post('UNIV_EDU_TYPE')  ,
            'UNV_ID' => $this->input->post('UNV_ID')  ,
            'COUNTRY_NO' => $this->input->post('COUNTRY_NO')  ,
            'UNIV_EDU_COLLEGE' => $this->input->post('UNIV_EDU_COLLEGE')  ,
            'UNIV_EDU_SPECIAL' => $this->input->post('UNIV_EDU_SPECIAL')  ,
            'DATE_OF_ISSUED' => $this->input->post('DATE_OF_ISSUED')  ,
            'UNIV_EDU_GRADE' => $this->input->post('UNIV_EDU_GRADE')  ,
            'THESIS_TITLE' => $this->input->post('THESIS_TITLE')  ,
            'FILE_BATH' => $this->input->post('FILE_BATH')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APPLICATION_UNIV_EDU->AddData($items);
        return redirect('/APPLICATION_UNIV_EDU');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
