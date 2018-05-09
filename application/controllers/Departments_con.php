<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =UTF-8');

class Departments_con  extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Department/Department_mod');
		$this->auth_model->middlewareAuth();
    }
	//*****************************************//
	public function index()
	{

            //$data['approve'] = $this->session->flashdata('approve');
            $data['Adddep'] = $this->session->flashdata('Adddep');
            $data['editdep'] = $this->session->flashdata('editdep');
            $data['deletdep'] = $this->session->flashdata('deletdep');
            //$data['dis_approve'] = $this->session->flashdata('dis_approve');
			$data['collAll'] = $this->Department_mod->getCollage();
            $data['departAll'] = $this->Department_mod->getDepart();
            $this->load->view('Departments/DepartmentShow', $data);
	}
    //***********************************************//
	public function AddDepart(){
         
        if ($this->session->user->USR_NO == 10) {
		     $data['collAll'] = $this->Department_mod->getCollage();
             $this->load->view('Departments/DepartmentAdd',$data);
         } else {
            return redirect('auth/login');
         }
    }
	//*********************************************//
	public function DepartmentItems()
    {
         if ($this->session->user->USR_NO == 10) {
         $items = array(
             'DEP_ID' => $this->input->post('dep_no'),
			 'LOC_NO' => $this->input->post('loc_no'),
			 'DEP_NAME' => $this->input->post('dep_name'),
             'ENTRY_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO  
			);
        $this->session->set_flashdata('Adddep', ' تمت اضافة القسم بنجاح   ');
         $this->Department_mod->addDepart($items);
        return redirect('/Departments_con');
    }
     else {
            return redirect('auth/login');
         }
    }
	//*********************************************//
	public function DepartmentEdit($depid ,$colid){
        
        if ($this->session->user->USR_NO == 10) {
            $data['depatedit'] = $this->Department_mod->getDepartWherecol($colid,$depid);
			$data['colldep'] = $this->Department_mod->getCollageWhere($colid);
        $this->load->view('Departments/DepartmentEdit', $data);
         } else {
           return redirect('auth/login');
         }
        
    }
    //******************************************//
    public function DepartmentupdateItem()
    {
        if ($this->session->user->USR_NO == 10) {
        $array = array(
            'DEP_ID' => $this->input->post('dep_id'),
			 'LOC_NO' => $this->input->post('loc_no'),
			 'DEP_NAME' => $this->input->post('dep_name'),
             'ENTRY_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO  
        );
		$depid = $this->input->post('dep_id');
		$colid = $this->input->post('loc_no');
		$this->Department_mod->updateDepart($colid,$depid,$array);
		$this->session->set_flashdata('editdep', ' تم تعديل بيانات القسم بنجاح   ');
        return redirect('/Departments_con');
    }
     else {
           return redirect('auth/login');
         }
        
    }
	//************************************************//
	public function Departmentdelete($depid,$locid)
    {
       if ($this->session->user->USR_NO == 10) {
        $this->Department_mod->deleteDepart($depid,$locid);
        $this->session->set_flashdata('deletdep', ' تم حذف القسم بنجاح   ');
        return redirect('/Departments_con');

    }
     else {
           return redirect('auth/login');
         }
        
    }
}
