<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Edu  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('UniversitiesModel');
        $this->load->model('GeneralModel');

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
        $data['levels'] = $this->UniversitiesModel->getLevels();
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
            'PRE_EDU_SER' => $this->input->post('PRE_EDU_SER')  ,
            'PRE_EDU_TYPE' => $this->input->post('PRE_EDU_TYPE')  ,
            'SCHOOL_NAME' => $this->input->post('SCHOOL_NAME')  ,
            'COUNTRY_NO' => $this->input->post('COUNTRY_NO')  ,
            'PRE_EDU_START' => $this->input->post('PRE_EDU_START')  ,
            'PRE_EDU_END' => $this->input->post('PRE_EDU_END')  ,
            'PRE_EDU_GRADE' => $this->input->post('PRE_EDU_GRADE')  ,
            'FILE_BATH' => $this->input->post('FILE_BATH')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_Edu->AddData($items);
        return redirect('/Edu');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/

  /**************************************/
  /*  public function AddUniversities(){

        $data2['levels'] = $this->UniversitiesModel->getLevels();
        $this->load->view('Universities/AddUniversities', $data2 );
    }*/
}
