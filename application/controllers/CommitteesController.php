<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class CommitteesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommitteesModel');
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
            $data['generals'] = $this->CommitteesModel->GetCommittees();
            $this->load->view('Committees/CommitteesShow', $data);
         } 
        else {
            return redirect('auth/login');
        }
    }
/*************************************/
    public function AddCommittees(){
         
         if ($this->session->user->USR_NO == 10) {
          $this->load->view('Committees/AddCommittees');
     } 
        else {
            return redirect('auth/login');
        }
    }
/*******************************************************/
public function ShowCommittees($id){
        if ($this->session->user->USR_NO == 10) {
        $data['d'] = $this->CommitteesModel->GetCommitteesWhere($id);
        
        $this->load->view('Committees/ShowCommittees', $data);
         } 
        else {
            return redirect('auth/login');
        }
        }
/*******************************************************/

    public function EditCommittees($conid){
        if ($this->session->user->USR_NO == 10) {
        
        $data['approves'] = $this->CommitteesModel->GetCommitteesWhere($conid);
        $this->load->view('Committees/EditCommittees', $data);
       } 
        else {
            return redirect('auth/login');
        }  
    }
    /*****************************************/
    
    public function UpdateCommitteesItem($conid)
    {
       if ($this->session->user->USR_NO == 10) {
       
        $array = array(
            'COMM_TITLE' => $this->input->post('COMM_TITLE'),
             'COMM_TYPE' => $this->input->post('COMM_TYPE'),
             'UPDATE_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO     
        );
        $this->CommitteesModel->UpdateCommittees($conid, $array);
        $this->session->set_flashdata('editcon', 'تم التعديل بنجاح  ');
        return redirect('/CommitteesController');
    
     } 
        else {
            return redirect('auth/login');
        }
        }
    /**************************************/
    
     public function CommitteesSetItems()
    {
        if ($this->session->user->USR_NO == 10) {
         $items = array(
             
             'COMM_TITLE' => $this->input->post('COMM_TITLE'),
             'COMM_TYPE' => $this->input->post('COMM_TYPE'),
             'ENTRY_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO 
            );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
         
         $this->CommitteesModel->AddCommittees($items);
        return redirect('/CommitteesController');
 } 
        else {
            return redirect('auth/login');
        }

    }
    /**************************************************/
    
     public function DeleteCommittees($id, $Committees_NO = '')
    {
       if ($this->session->user->USR_NO == 10) {
        $this->CommitteesModel->DeleteCommittees($id, $Committees_NO);
        $this->session->set_flashdata('deletecon', ' تم حذف البيانات بنجاح ');
        return redirect('/CommitteesController');
 } 
        else {
            return redirect('auth/login');
        }
    }
/************************************************/
}