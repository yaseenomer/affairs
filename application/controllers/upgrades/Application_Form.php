<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Application_Form  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
       // $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_Application_Form');
        $this->load->model('upgrades/M_Edu');
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');

    }
/*********************************/
    public function show_all()
    {

        $data['alls'] = $this->M_Application_Form->getallup();
        $data['insert'] = $this->session->flashdata('insert');
        $data['update'] = $this->session->flashdata('update');
        //var_dump($data);
       $this->load->view('upgrades/application_form/index', $data);
    }
    /************************************/
    public function show($id)
    {
        $LAN = $this->session->language;
        $data['detail'] = $this->M_Application_Form->GetDataWhere($id);
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');

        if ($LAN==1) {
            $this->load->view('upgrades/application_form/Pre-University_Education', $data);
        }
        else
        {
            $this->load->view('upgrades/application_form/Pre-University_Education_en', $data);
        }
    }

    /***********************************/
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
    /*************************************************/
public function language($emp_no,$app_id){

    $data['insert_app'] = $this->session->flashdata('insert_app');
    $data['emp_no'] = $emp_no;
    $data['app_id'] = $app_id;


    $this->load->view('upgrades/application_form/check',$data);

}
    /************************************************/
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
    public function create($LAN,$emp_no,$app_id)
    {
        $data['emp_no'] = $emp_no;
        $data['app_id'] = $app_id;
        $this->session->set_userdata('language',$LAN);
        $this->load->view('upgrades/application_form/Personal_Information',$data);
    }

    /*********************************************/
    public function create_en($LAN,$emp_no,$app_id)
    {
        $data['emp_no'] = $emp_no;
        $data['app_id'] = $app_id;
        $this->session->set_userdata('language',$LAN);
        $this->load->view('upgrades/application_form/Personal_Information_en',$data);
    }

    /*********************************************/
    public function insert()
    {
       // var_dump($this->input->post());

        //$str = substr($str, 1); first charachters
        $LAN = $this->session->language;
        $APP_ID=120;
        $EMP_NO=1000857;
        /*********************************************/
        /********************************************/
        $items = array(


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
           // 'FILE_BATH' =>attache($APP_ID,'CV')  ,
            'ENTRY_DATE' =>date('d-M-y') ,
            //'UPDATE_DATE' => date('d-M-y')  ,
            'USR_NO' =>user()->USR_NO,
            'CV_LANG' =>$LAN,

        );


        if(!$this->M_Application_Form->checkAppIdExist($APP_ID)) {

            $this->M_Application_Form->AddData($items);
        }
        else {
            $this->session->set_flashdata('addcon', ' رقم الاستمارة مدخل من قبل  ');
        }
/*********************************/
       if($this->M_Application_Form->checkAppIdExist($APP_ID)){
           $item = array(
               'FILE_BATH' =>attache($APP_ID,'CV')  ,
               'UPDATE_DATE' => date('d-M-y')  ,
               'USR_NO' =>user()->USR_NO
           );
           $this->M_Application_Form->Updatedata($APP_ID,$item) ;
           $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
       }
/***********************************/
        if($LAN==1) {
            return redirect('upgrades/Edu/create');
        }
        else {
            return redirect('upgrades/Edu/create_en');
        }
    }
    /***********************************/
    public  function  t()

    {
        var_dump($this->M_Application_Form->checkAppIdExist(12));
    }
}
