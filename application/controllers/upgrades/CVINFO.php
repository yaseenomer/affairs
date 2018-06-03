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

    }

    /**
     *
     */
    public function index()
    {

        $this->load->view('upgrades/application_form/CVINFO');

    }

    public function create1()
    {



    }

    public function insert()
    {
        var_dump($this->input->post());
    }

}
