<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Edu  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
       // $this->load->model('UniversitiesModel');
        $this->load->model('GeneralModel');
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
        $data['levels'] = $this->M_Edu->getAccounts();
        //var_dump($data);
        $this->load->view('upgrades/application_form/Application_form',$data);

    }

    public function create()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['levels'] = $this->M_Edu->getAccounts();
        $this->load->view('upgrades/application_form/Pre-University_Education',$data);
    }

    /**************************************/
    public function create_en()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['levels'] = $this->M_Edu->getAccounts();
        $this->load->view('upgrades/application_form/Pre-University_Education_en',$data);
    }
    /*************************************/

    public function insert()
    {
        /*********************************************/
        $APP_ID=105;
        $LAN = $this->session->language;
        /********************************************/

        $maxid=$this->M_Edu->maxid($APP_ID);
        $PRE_EDU_SER=$maxid+1;
        //$str = substr($str, 1); first charachters
        $items = array(
            'APP_ID' => $APP_ID  ,
            'PRE_EDU_SER' =>$PRE_EDU_SER,
            'PRE_EDU_TYPE' => $this->input->post('PRE_EDU_TYPE')  ,
            'SCHOOL_NAME' => $this->input->post('SCHOOL_NAME')  ,
            'COUNTRY_NO' => $this->input->post('COUNTRY_NO')  ,
            'PRE_EDU_START' => $this->input->post('PRE_EDU_START')  ,
            'PRE_EDU_END' => $this->input->post('PRE_EDU_END')  ,
            'PRE_EDU_GRADE' => $this->input->post('PRE_EDU_GRADE')  ,
            'FILE_BATH' => attache($APP_ID,'PRE_EDU')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );
        //var_dump($items);exit();

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_Edu->AddData($items);

        if($LAN==1) {
            return redirect('upgrades/APPLICATION_UNIV_EDU/create');
        }
        else {
            return redirect('upgrades/APPLICATION_UNIV_EDU/create_en');
        }

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
