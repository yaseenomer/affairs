<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class Academic_degreesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Academic_degreesModel');
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
            $data['generals'] = $this->Academic_degreesModel->GetAcademic_degrees();
            $this->load->view('Academic_degrees/Academic_degreesShow', $data);
            }
       else {
            return redirect('auth/login');

        } 
    }
/*************************************/
    public function AddAcademic_degrees(){
         
         if ($this->session->user->USR_NO == 10) {
          $this->load->view('Academic_degrees/AddAcademic_degrees');
         }
         else {
            return redirect('auth/login');

        } 
    }
/*******************************************************/
public function ShowAcademic_degrees($id){
         if ($this->session->user->USR_NO == 10) {
        $data['d'] = $this->Academic_degreesModel->GetAcademic_degreesWhere($id);
        
        $this->load->view('Academic_degrees/ShowAcademic_degrees', $data);
        }
         else {
            return redirect('auth/login');

        } 
        }
/*******************************************************/

    public function EditAcademic_degrees($conid){
        
         if ($this->session->user->USR_NO == 10) {
        $data['approves'] = $this->Academic_degreesModel->GetAcademic_degreesWhere($conid);
        $this->load->view('Academic_degrees/EditAcademic_degrees', $data);
        }
         else {
            return redirect('auth/login');

        } 
        }
    /*****************************************/
    
    public function UpdateAcademic_degreesItem($conid)
    {
        if ($this->session->user->USR_NO == 10) {
        $array = array(
            'DEG_ARAB_NAME' => $this->input->post('DEG_ARAB_NAME')  ,
            'DEG_ENG_NAME' => $this->input->post('DEG_ENG_NAME')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            'USR_NO' => user()->USR_NO      
        );
        $this->Academic_degreesModel->UpdateAcademic_degrees($conid, $array);
        $this->session->set_flashdata('editcon', 'تم التعديل بنجاح  ');
        return redirect('/Academic_degreesController');
    }
     else {
            return redirect('auth/login');

        } 
        }
    /**************************************/
    
     public function Academic_degreesSetItems()
    {
         if ($this->session->user->USR_NO == 10) {
         $items = array(
             
            'DEG_ARAB_NAME' => $this->input->post('DEG_ARAB_NAME')  ,
            'DEG_ENG_NAME' => $this->input->post('DEG_ENG_NAME')  ,
            'ENTRY_DATE' => date('d-M-y') ,
            'USR_NO' => user()->USR_NO 
            );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
         
         $this->Academic_degreesModel->AddAcademic_degrees($items);
        return redirect('/Academic_degreesController');
    }
     else {
            return redirect('auth/login');

        } 
        }
    /**************************************************/
    
     public function DeleteAcademic_degrees($id, $COUNTRY_NO = '')
    {
         if ($this->session->user->USR_NO == 10) {
        $this->Academic_degreesModel->DeleteAcademic_degrees($id, $COUNTRY_NO);
        $this->session->set_flashdata('deletecon', ' تم حذف البيانات بنجاح ');
        return redirect('/Academic_degreesController');

    }
     else {
            return redirect('auth/login');

        } 
        }
/************************************************/
}