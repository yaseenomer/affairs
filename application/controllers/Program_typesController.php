<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class Program_typesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Program_typesModel');
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
            $data['generals'] = $this->Program_typesModel->GetProgram_types();
            $this->load->view('Program_types/Program_typesShow', $data);
        } 
        else {
            return redirect('auth/login');

        }  
    }
/*************************************/
    public function AddProgram_types(){
         if ($this->session->user->USR_NO == 10) {
          $this->load->view('Program_types/AddProgram_types');
         
          } 
        else {
            return redirect('auth/login');
        } 
    }
/*******************************************************/
public function ShowProgram_types($id){
         if ($this->session->user->USR_NO == 10) {
        $data['d'] = $this->Program_typesModel->GetProgram_typesWhere($id);
        
        $this->load->view('Program_types/ShowProgram_types', $data);
         } 
        else {
            return redirect('auth/login');
        } 
        }
/*******************************************************/

    public function EditProgram_types($conid){
        
         if ($this->session->user->USR_NO == 10) {
        $data['approves'] = $this->Program_typesModel->GetProgram_typesWhere($conid);
        $this->load->view('Program_types/EditProgram_types', $data);
         } 
        else {
            return redirect('auth/login');
        } 
    }
    /*****************************************/
    
    public function UpdateProgram_typesItem($conid)
    {
        if ($this->session->user->USR_NO == 10) {
        $array = array(
            'PROG_TYP_NAME' => $this->input->post('PROG_TYP_NAME')  ,
            'PROG_TYP' => $this->input->post('PROG_TYP')  ,
            'ENTRY_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO     
        );
        $this->Program_typesModel->UpdateProgram_types($conid, $array);
        $this->session->set_flashdata('editcon', 'تم التعديل بنجاح  ');
        return redirect('/Program_typesController');
    }
     
        else {
            return redirect('auth/login');
        }
        } 
    /**************************************/
    
     public function Program_typesSetItems()
    {
         if ($this->session->user->USR_NO == 10) {
         $items = array(
             
             'PROG_TYP_NAME' => $this->input->post('PROG_TYP_NAME'),
             'PROG_TYP' => $this->input->post('PROG_TYP')  ,
             'ENTRY_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO 
            );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
         
         $this->Program_typesModel->AddProgram_types($items);
        return redirect('/Program_typesController');
 } 
        else {
            return redirect('auth/login');
        } 
    }
    /**************************************************/
    
     public function DeleteProgram_types($id, $COUNTRY_NO = '')
    {
         if ($this->session->user->USR_NO == 10) {
       
        $this->Program_typesModel->DeleteProgram_types($id, $COUNTRY_NO);
        $this->session->set_flashdata('deletecon', ' تم حذف البيانات بنجاح ');
        return redirect('/Program_typesController');
 } 
        else {
            return redirect('auth/login');
        } 
    }
/************************************************/
}