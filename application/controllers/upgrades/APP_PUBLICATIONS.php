<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class APP_PUBLICATIONS  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();
        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->auth_model->middlewareAuth();
        $this->load->model('upgrades/M_APP_PUBLICATIONS');
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
        $this->load->view('upgrades/application_form/Application_form',$data);

    }

    public function create()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $this->load->view('upgrades/application_form/Publications',$data);
    }
/****************************************/
    public function create_en()
    {
        $data['approve'] = $this->session->flashdata('approve');
        $data['addcon'] = $this->session->flashdata('addcon');
        $data['editcon'] = $this->session->flashdata('editcon');
        $data['deletecon'] = $this->session->flashdata('deletecon');
        $this->load->view('upgrades/application_form/Publications_en',$data);
    }
/****************************************/
    public function insert()
    {
       // var_dump($this->input->post());

        //$str = substr($str, 1); first charachters

        /*********************************************/
        $APP_ID=105;
        $LAN = $this->session->language;
        /********************************************/
        $maxid=$this->M_APP_PUBLICATIONS->maxid($APP_ID);
        $PUB_SER=$maxid+1;

        $items = array(
            'APP_ID' => $APP_ID  ,
            'PUB_SER' => $PUB_SER,
            'PUB_TYP' => $this->input->post('PUB_TYP')  ,
            'DATE_OF_PUB' => $this->input->post('DATE_OF_PUB')  ,
            'PLACE_OF_PUB' => $this->input->post('PLACE_OF_PUB')  ,
            'TITLE' => $this->input->post('TITLE')  ,
            'DESCRIPTION' => $this->input->post('DESCRIPTION')  ,
            'PUB_LANGUGE' => $this->input->post('PUB_LANGUGE')  ,
            'FILE_BATH' => attache($APP_ID,'PUBLICATIONS')    ,
            'ENTRY_DATE' => date('d-M-y') ,
            //'UPDATE_DATE' => $this->input->post('UPDATE_DATE')  ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_APP_PUBLICATIONS->AddData($items);
        if($LAN==1) {
            return redirect('upgrades/APP_OTHER_EXPRIENCES/create');
        }
        else {
            return redirect('upgrades/APP_OTHER_EXPRIENCES/create_en');
        }
       // return redirect('upgrades/APP_PUBLICATIONS');
    }
    /***********************************/
  /*  public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }*/
}
