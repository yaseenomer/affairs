<?php

class mainController3 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        middlewareAuth();

    }

    public function index()
    {
        $this->load->view('mainview3');
    }


}