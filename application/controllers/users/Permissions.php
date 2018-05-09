<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Permissions  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/M_Permission','permission');
        $this->auth_model->middlewareAuth();

    }


}
