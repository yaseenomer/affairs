<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class CVINFO  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
       // $this->file = new Symfony\Component\Filesystem\Filesystem();
       // $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_CVINFO');
    }

    /**
     *
     */

    public function index()
    {
        $APP_ID= $this->input->post('app_id');
        $EMP_NO=$this->input->post('emp_no');
        $data['cv']     =     $this->M_CVINFO->GetData_cv($APP_ID);
        $data['pre']    =     $this->M_CVINFO->GetData_PRE($APP_ID);
        $data['univer'] =     $this->M_CVINFO->GetData_univ($APP_ID);
        $data['EXP']    =     $this->M_CVINFO->GetData_EXP($APP_ID);
        $data['PRO']    =     $this->M_CVINFO->GetData_PRO($APP_ID);
        $data['PUB']    =     $this->M_CVINFO->GetData_PUB($APP_ID);
        $data['PEPOLE'] =     $this->M_CVINFO->GetData_Pepole($APP_ID);
        $data['EXPER']  =     $this->M_CVINFO->GetData_EXPER($APP_ID);
        $data['REFERENCES'] = $this->M_CVINFO->GetData_REFERENCES($APP_ID);
       // $data['Empno'] = $this->M_CVINFO->GetEmp_NO($APP_ID);
        $data['Data'] = $this->M_CVINFO->GetData($APP_ID,$EMP_NO);
        var_dump($data);exit();
        $this->load->view('upgrades/application_form/CVINFO',$data);

    }

}
