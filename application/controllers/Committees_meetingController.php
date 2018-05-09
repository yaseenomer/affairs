<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class Committees_meetingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Committees_meetingModel');
        $this->load->model('GeneralModel');
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
            $data['lockcon'] = $this->session->flashdata('lockcon');
            $data['generals'] = $this->Committees_meetingModel->GetCommittees_meeting();
            $this->load->view('Committees_meeting/Committees_meetingShow', $data);
        } 
        else {
            return redirect('auth/login');
        } 
       
    }
/*************************************/
    public function AddCommittees_meeting(){
         if ($this->session->user->USR_NO == 10) {

         $data2['levels'] = $this->Committees_meetingModel->getLevels();
		$this->load->view('Committees_meeting/AddCommittees_meeting', $data2 );
       } 
        else {
            return redirect('auth/login');
        }  
    }
/*******************************************************/
public function ShowCommittees_meeting($id){
        if ($this->session->user->USR_NO == 10) {

        $data['d'] = $this->Committees_meetingModel->GetCommittees_meetingWhere($id);
        
        $this->load->view('Committees_meeting/ShowCommittees_meeting', $data);
        } 
        else {
            return redirect('auth/login');
        } 
        }
/*******************************************************/

    public function EditCommittees_meeting($unid){
        if ($this->session->user->USR_NO == 10) {
        
        $data['approves'] = $this->Committees_meetingModel->GetCommittees_meetingWhere($unid);
        $this->load->view('Committees_meeting/EditCommittees_meeting',$data);
      } 
        else {
            return redirect('auth/login');
        }   
    }
    /*****************************************/
    
    public function UpdateCommittees_meetingItem($conid)
    {
        if ($this->session->user->USR_NO == 10) {
        $array = array(
            // 'COMM_ID' => $this->input->post('COMM_ID'),
             'MEET_DATE' => $this->input->post('MEET_DATE'),
             'MEET_TYP' => $this->input->post('MEET_TYP'),
             'APP_ID' => $this->input->post('APP_ID'),
             'RECOMMENDATION' => $this->input->post('RECOMMENDATION'),
             'UPDATE_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO  
            );

        $this->Committees_meetingModel->UpdateCommittees_meeting($conid, $array);
        $this->session->set_flashdata('editcon', 'تم التعديل بنجاح  ');
        return redirect('/Committees_meetingController');
        } 
        else {
            return redirect('auth/login');
        } 
    }
    
    /**************************************/
    
     public function Committees_meetingSetItems()
    {
        if ($this->session->user->USR_NO == 10) {
            $MEET_TYP=$this->input->post('MEET_TYP');
           if($MEET_TYP==2){
               $data['d'] = $this->Committees_meetingModel->GetCommittees_meeting_unlock();
               $this->session->set_flashdata('lockcon', 'تم اغلاق الترشيح للدورة  ');
               $this->load->view('candidates/show_candidate_lock',$data);
           }
           elseif ($MEET_TYP==1){


           }
           else {

           }
         /*$items = array(
             'COMM_ID' => $this->input->post('COMM_ID'),
             'MEET_DATE' => $this->input->post('MEET_DATE'),
             'MEET_TYP' => $this->input->post('MEET_TYP'),
             'APP_ID' => $this->input->post('APP_ID'),
             'RECOMMENDATION' => $this->input->post('RECOMMENDATION'),
             'ENTRY_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO  
            );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');



         $this->Committees_meetingModel->AddCommittees_meeting($items);*/
      //  return redirect('/Committees_meetingController');
} 
        else {
            return redirect('auth/login');
        } 

    }
    /**************************************************/
    
     public function DeleteCommittees_meeting($id)
    {
       if ($this->session->user->USR_NO == 10) {
        $this->Committees_meetingModel->DeleteCommittees_meeting($id);
        $this->session->set_flashdata('deletecon', ' تم حذف البيانات بنجاح ');
        return redirect('/Committees_meetingController');
} 
        else {
            return redirect('auth/login');
        } 
    }
/************************************************/
}