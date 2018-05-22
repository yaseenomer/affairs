<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APP_CV_REFERENCES  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_CV_REFERENCES');

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
        $data['qual'] = $this->M_APP_CV_REFERENCES->GetACADEMIC_DEGREES_NEXT();
       // var_dump($data);
        $this->load->view('upgrades/application_form/Application_form',$data);

    }

    public function create()
    {
        $data['qual'] = $this->M_APP_CV_REFERENCES->GetACADEMIC_DEGREES_NEXT();
        $this->load->view('upgrades/application_form/Peoples',$data);
    }
/*********************************************/

    public function create_en()
    {
        $data['qual'] = $this->M_APP_CV_REFERENCES->GetACADEMIC_DEGREES_NEXT();
        $this->load->view('upgrades/application_form/Peoples_en',$data);
    }
/********************************************/
    public function insert()
    {
       // var_dump($this->input->post());

        //$str = substr($str, 1); first charachters

        $x=$this->M_APP_CV_REFERENCES->maxid(113);
        $EXP_SER=$x+1;

        $items = array(
            'APP_ID' => 113  ,
            //'EXP_SER' =>1,
           // 'APP_ID' => $this->input->post('APP_ID')  ,
            'EXP_SER' =>$EXP_SER,// $this->input->post('EXP_SER')  ,
            'EMP_NAME' => $this->input->post('EMP_NAME')  ,
            'ADDRESS' => $this->input->post('ADDRESS')  ,
            'REL_PHONE' => $this->input->post('REL_PHONE')  ,
            'E_MAIL' => $this->input->post('E_MAIL')  ,
            'WORK_PLC' => $this->input->post('WORK_PLC')  ,
            'REF_JOB' => $this->input->post('REF_JOB')  ,
            'CURRENT_DEG' => $this->input->post('CURRENT_DEG')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_CV_REFERENCES->AddData($items);
        return redirect('upgrades/APP_CV_REFERENCES');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
