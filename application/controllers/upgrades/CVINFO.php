<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class CVINFO  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
       // $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_CVINFO');
    }

    /**
     *
     */

    public function index($id)
    {

        $data['cv']     =     $this->M_CVINFO->GetData_cv($id);
        $data['pre']    =     $this->M_CVINFO->GetData_PRE($id);
        $data['univer'] =     $this->M_CVINFO->GetData_univ($id);
        $data['EXP']    =     $this->M_CVINFO->GetData_EXP($id);
        $data['PRO']    =     $this->M_CVINFO->GetData_PRO($id);
        $data['PUB']    =     $this->M_CVINFO->GetData_PUB($id);
        $data['PEPOLE'] =     $this->M_CVINFO->GetData_Pepole($id);
        $data['EXPER']  =     $this->M_CVINFO->GetData_EXPER($id);
        $data['REFERENCES'] = $this->M_CVINFO->GetData_REFERENCES($id);
        $data['Empno'] = $this->M_CVINFO->GetEmp_NO($id);
        $data['Data'] = $this->M_CVINFO->GetData($id);
        var_dump($data);exit();
        $this->load->view('upgrades/application_form/CVINFO',$data);

    }

}
