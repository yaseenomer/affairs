<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] = array('database','form_validation','session');


$autoload['drivers'] = array();


$autoload['helper'] =
    array('url','form','auth_helper','nav_helper',
           'auth_helper','canvas_helper','upload_helper',
           'upload_upgrades_helper');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('auth/auth_model','auth/M_EmpAccounts');
