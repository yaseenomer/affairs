<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Application_Form  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_Application_Form');
        $this->load->model('upgrades/M_Edu');
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');

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
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $this->load->view('upgrades/application_form/Application_form',$data);

    }
/***********************************************/
    public function index_en()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $data['levels'] = $this->M_Edu->getAccounts();
        $data['uni'] = $this->M_APPLICATION_UNIV_EDU->Getuniversity();
        $this->load->view('upgrades/application_form/Application_form_en',$data);

    }
/**********************************************/
    public function create()
    {
        $this->load->view('upgrades/application_form/Personal_Information');
    }

    /*********************************************/
    public function create_en()
    {
        $this->load->view('upgrades/application_form/Personal_Information_en');
    }

    /*********************************************/
    public function insert()
    {
       // var_dump($this->input->post());

        //$str = substr($str, 1); first charachters

        $APP_ID=105;
        $EMP_NO=1000857;
        $items = array(
            /*********************************************/
            /********************************************/

            'APP_ID' => $APP_ID  ,
            'EMP_NO' => $EMP_NO ,
            'FRT_NAME_AR' =>$this->input->post('FRT_NAME_AR')  ,
            'SND_NAME_AR' =>$this->input->post('SND_NAME_AR')  ,
            'THR_NAME_AR' =>$this->input->post('THR_NAME_AR')  ,
            'LST_NAME_AR' =>$this->input->post('LST_NAME_AR')  ,
            'FRT_NAME_ENG' =>$this->input->post('FRT_NAME_ENG')  ,
            'SND_NAME_ENG' =>$this->input->post('SND_NAME_ENG')  ,
            'THR_NAME_ENG' =>$this->input->post('THR_NAME_ENG')  ,
            'LST_NAME_ENG' =>$this->input->post('LST_NAME_ENG')  ,
            'EMP_LANGUAGES' =>$this->input->post('EMP_LANGUAGES')  ,
            'HOME_PHONE' =>$this->input->post('HOME_PHONE')  ,
            'FILE_BATH' =>attache($APP_ID,'CV')  ,
            'ENTRY_DATE' =>date('d-M-y') ,
            //'UPDATE_DATE' => date('d-M-y')  ,
            'USR_NO' =>user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
        //var_dump($items);
        $this->M_Application_Form->AddData($items);
        return redirect('upgrades/Application_Form');
    }
    /***********************************/

}
