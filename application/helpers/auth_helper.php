<?php
/**
 * Created by PhpStorm.
 * User: yaseen
 * Date: 1/22/2018
 * Time: 1:08 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('headOfTheDepartment'))
{
    function headOfTheDepartment()
    {
        $CI =& get_instance();
       if ($CI->session->user->GROUP_ID == 4){
           return true;
       }else{
           return false;
       }
    }
    

}


if ( ! function_exists('deanOfTheCollege'))
{
    function deanOfTheCollege()
    {
        $CI =& get_instance();
        if ($CI->session->user->GROUP_ID == 5){
            return true;
        }else{
            return false;
        }
    }


}

if ( ! function_exists('secretaryOfAffairs'))
{
    function secretaryOfAffairs()
    {
        $CI =& get_instance();
        if ($CI->session->user->GROUP_ID == 12){
            return true;
        }else{
            return false;
        }
    }


}

if ( ! function_exists('committees'))
{
    function committees()
    {
        $CI =& get_instance();
        if ($CI->session->user->GROUP_ID == 7){
            return true;
        }else{
            return false;
        }
    }


}

if ( ! function_exists('admin'))
{
    function admin()
    {
        $CI =& get_instance();
        if ($CI->session->user->GROUP_ID == 1){
            return true;
        }else{
            return false;
        }
    }


}

if ( ! function_exists('user')) {
    function user()
    {
        $CI =& get_instance();
        if ($CI->session->user) {
            return $CI->session->user;
        }
    }
}


    if (!function_exists('middlewareAuth')) {
        function middlewareAuth()
        {
            $CI =& get_instance();
            if ( ! $CI->session->userdata('user'))
            {
                redirect(base_url()."auth/auth/getSignIn");
            }
        }


    }
