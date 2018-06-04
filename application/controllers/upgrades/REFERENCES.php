<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class REFERENCES  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
       // $this->file = new Symfony\Component\Filesystem\Filesystem();
       // $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_CV_REFERENCES');
        $this->load->model('upgrades/M_APP_UNIVERSITIES_EXP');
        $this->load->model('upgrades/M_APPLICATION_UNIV_EDU');
        $this->load->model('upgrades/M_APP_PROJECTS');
        $this->load->model('upgrades/M_APP_PUBLICATIONS');
        $this->load->model('upgrades/M_APP_OTHER_EXPRIENCES');

    }

/**********************************************/

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
    /************************************/
    public function show($id)
    {
        $LAN = $this->session->language;
        $data['UnivData'] = $this->M_APP_UNIVERSITIES_EXP->GetData_UNIV($id);
        $data['pre'] = $this->M_APPLICATION_UNIV_EDU->GetData_PRE($id);
        $data['person'] = $this->M_APPLICATION_UNIV_EDU->GetData_PERSONAL($id);
        $data['EXP'] = $this->M_APP_PROJECTS->GetData_EXP($id);
        $data['PRO'] = $this->M_APP_PUBLICATIONS->GetData_PRO($id);
        $data['PUB'] = $this->M_APP_OTHER_EXPRIENCES->GetData_PUB($id);
        $data['PEPOLE'] = $this->M_APP_OTHER_EXPRIENCES->GetData_Pepole($id);
        $data['EXPER'] = $this->M_APP_CV_REFERENCES->GetData_EXPER($id);
        $data['REFERENCES'] = $this->M_APP_CV_REFERENCES->GetData_REFERENCES($id);
        $data['qual'] = $this->M_APP_CV_REFERENCES->GetACADEMIC_DEGREES_NEXT();
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');

        if ($LAN==1) {
            $this->load->view('upgrades/application_form/Refrences', $data);
        }
        else
        {
            $this->load->view('upgrades/application_form/Refrences', $data);
        }
    }

    /***********************************/
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

        /*********************************************/
        $APP_ID= $this->input->post('app_id');

        /********************************************/
        $x=$this->M_APP_CV_REFERENCES->maxid($APP_ID);
        $EXP_SER=$x+1;

        $items = array(
            'APP_ID' => $APP_ID  ,
            'EXP_SER' =>$EXP_SER,
            'EMP_NAME' => $this->input->post('EMP_NAME')  ,
            'ADDRESS' => $this->input->post('ADDRESS')  ,
            'REL_PHONE' => $this->input->post('REL_PHONE')  ,
            'E_MAIL' => $this->input->post('E_MAIL')  ,
            'WORK_PLC' => $this->input->post('WORK_PLC')  ,
            'REF_JOB' => $this->input->post('REF_JOB')  ,
            'CURRENT_DEG' => $this->input->post('CURRENT_DEG')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' =>25
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_CV_REFERENCES->AddData($items);
        return redirect('upgrades/APP_CV_REFERENCES/show/'.$APP_ID);
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
