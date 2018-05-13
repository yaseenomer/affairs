<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Application_Form  extends CI_Controller
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

            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            '' => $this->input->post('')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            'USR_NO' => user()->USR_NO
        );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

        $this->M_Application_Form->AddData($items);
        return redirect('/Application_Form');
    }

}
