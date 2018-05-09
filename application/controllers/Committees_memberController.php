<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class Committees_memberController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Committees_memberModel');
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
            $data['emps'] = $this->Committees_memberModel->getEmps();
            $data['generals'] = $this->Committees_memberModel->GetCommittees_member();
            $this->load->view('Committees_member/Committees_memberShow', $data);
        } 
        else {
            return redirect('auth/login');
        } 
    
    }
/*************************************/
    public function AddCommittees_member(){
        if ($this->session->user->USR_NO == 10) {
        $data2['levels'] = $this->Committees_memberModel->getLevels();
        $data2['emps'] = $this->Committees_memberModel->getEmps();
		$this->load->view('Committees_member/AddCommittees_member',$data2 );
       } 
        else {
            return redirect('auth/login');
        } 

    }
/*******************************************************/
public function ShowCommittees_member($id,$id1){
        if ($this->session->user->USR_NO == 10) {
        $data['d'] = $this->Committees_memberModel->GetCommittees_memberWhere($id,$id1);
        
        $this->load->view('Committees_member/ShowCommittees_member', $data);
        } 
        else {
            return redirect('auth/login');
        } 
        }
/*******************************************************/

    public function EditCommittees_member($unid,$emp){

        if ($this->session->user->USR_NO == 10) {
        $data['approves'] = $this->Committees_memberModel->GetCommittees_memberWhere($unid,$emp);
        $this->load->view('Committees_member/EditCommittees_member',$data);

       } 
        else {
            return redirect('auth/login');
        } 

        
    }
    /*****************************************/
    
    public function UpdateCommittees_memberItem($COMM_ID,$empno)
    {
        if ($this->session->user->USR_NO == 10) {
        $array = array(
             'COMM_ID' => $COMM_ID,//$this->input->post('COMM_ID'),
             'MEMBER_NAME' => $this->input->post('MEMBER_NAME'),
             'EMP_NO' => $this->input->post('EMP_NO'),
             'JOB_TITLE' => $this->input->post('JOB_TITLE'),
           // 'ENTRY_DATE'   =>date('y-M-d'),
             'UPDATE_DATE'   =>date('d-M-y'),
             'USR_NO '    => user()->USR_NO,
        );
       
        $this->Committees_memberModel->UpdateCommittees_member($COMM_ID,$empno,$array);
        $this->session->set_flashdata('editcon', 'تم التعديل بنجاح  ');
        return redirect('/Committees_memberController');
        } 
        else {
            return redirect('auth/login');
        } 
    }
    
    /**************************************/
    
     public function Committees_memberSetItems()
    {
if ($this->session->user->USR_NO == 10) {
         $items = array(
             'COMM_ID' => $this->input->post('COMM_ID'),
             'MEMBER_NAME' => $this->input->post('MEMBER_NAME'),
             'EMP_NO' => $this->input->post('EMP_NO'),
             'JOB_TITLE' => $this->input->post('JOB_TITLE'),
             'ENTRY_DATE' => date('d-M-Y') ,
            //'UPDATE_DATE'   =>date('d-M-Y'),
             'USR_NO '    => user()->USR_NO,
            );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
         
         $this->Committees_memberModel->AddCommittees_member($items);
        return redirect('/Committees_memberController');

} 
        else {
            return redirect('auth/login');
        } 
    }
    /**************************************************/
    
     public function DeleteCommittees_member($id,$emp)
    {
 if ($this->session->user->USR_NO == 10) {
        $this->Committees_memberModel->DeleteCommittees_member($id,$emp);
        $this->session->set_flashdata('deletecon', ' تم حذف البيانات بنجاح ');
        return redirect('/Committees_memberController');
} 
        else {
            return redirect('auth/login');
        } 
    }
/************************************************/

}