<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class CountriesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CountriesModel');
        $this->auth_model->middlewareAuth();

    }
/*****************************/

	public function index()
    {
        if ($this->session->user->USR_NO == 10) {
            $data['approve'] = $this->session->flashdata('approve');
            $data['addcon'] = $this->session->flashdata('addcon');
            $data['editcon'] = $this->session->flashdata('editcon');
            $data['deletecon'] = $this->session->flashdata('deletecon');
            $data['dis_approve'] = $this->session->flashdata('dis_approve');
            $data['generals'] = $this->CountriesModel->GetCountris();
            $this->load->view('Countries/CountriesShow', $data);
            } else {
            return redirect('auth/login');

        }
    }
/*************************************/
    public function AddCountries(){
          if ($this->session->user->USR_NO == 10) {
          $this->load->view('Countries/AddCountries');
          }
         else {
            return redirect('auth/login');
         }
    }
/*******************************************************/
public function ShowCountries($id){
         if ($this->session->user->USR_NO == 10) {
        $data['d'] = $this->CountriesModel->GetCountriWhere($id);
        
        $this->load->view('Countries/ShowCountries', $data);
        
        }
         else {
            return redirect('auth/login');
         }
    }
/*******************************************************/

    public function EditCountries($id){
        
        if ($this->session->user->USR_NO == 10) {
        $data['approves'] = $this->CountriesModel->GetCountriWhere($id);
        $this->load->view('Countries/EditCountries', $data);
        }
         else {
            return redirect('/auth');
         }
    }
    /*****************************************/
    
    public function UpdateCountriesItem($id)
    {
 if ($this->session->user->USR_NO == 10) {
        //$t=date('d-m-y');$this->uri->segment(3);
        
            $COUNTRY_NAME = $this->input->post('COUNTRY_NAME') ;
            $ENTRY_DATE = date('d-M-y');//$this->input->post('ENTRY_DATE');
            $USR_NO = $this->input->post('USR_NO') ; 
        $array=
        array(
        'COUNTRY_NO'=>$id,
        'COUNTRY_NAME'=>$COUNTRY_NAME,
        'ENTRY_DATE'=>$ENTRY_DATE,
        'USR_NO '    => user()->USR_NO);
          // var_dump( $array )  ;  
       $this->CountriesModel->UpdateCountries($id,$array);
        $this->session->set_flashdata('editcon', 'تم التعديل بنجاح  ');
        return redirect('/CountriesController');
    }
     else {
            return redirect('/auth/login');
         }
    }
    /**************************************/
    
     public function CountriesSetItems()
     {

         $items = array(

             'COUNTRY_NAME' => $this->input->post('COUNTRY_NAME'),
             'ENTRY_DATE' => date('d-M-y'),
             'USR_NO ' => user()->USR_NO
         );

         $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');

         $this->CountriesModel->AddCountries($items);
         return redirect('/CountriesController');
     }

    /**************************************************/
    
     public function DeleteCountries($id, $COUNTRY_NO = '')
    {
         if ($this->session->user->USR_NO == 10) {
       // $collage_id = $this->auth_model->get_collage_for_accounting_admin($collage);
        $this->CountriesModel->DeleteCountries($id, $COUNTRY_NO);
        $this->session->set_flashdata('deletecon', ' تم حذف البيانات بنجاح ');
        return redirect('/CountriesController');

    }
     else {
            return redirect('/auth/login');
         }
    }
/************************************************/
}