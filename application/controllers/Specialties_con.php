<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specialties_con  extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Specialties/Specialties_mod','Specialties_mod');
		$this->auth_model->middlewareAuth();
    }
	
	public function index()
	{
		if ($this->session->user->USR_NO == 10) {
            //$data['approve'] = $this->session->flashdata('approve');
            $data['Addspc'] = $this->session->flashdata('Addspc');
            $data['editspc'] = $this->session->flashdata('editspc');
            $data['deletspc'] = $this->session->flashdata('deletspc');
            //$data['dis_approve'] = $this->session->flashdata('dis_approve');
			$data['colall'] = $this->Specialties_mod->getCollage();
            $this->load->view('Specialties/SpecialtiesShow',$data);
        } else {
           return redirect('auth/login');
        }  	
	}
    //*****************************************************//
	public function getdpewhere (){
	    if ($this->session->user->USR_NO == 10) {
		$departs = $this->Specialties_mod->getdepWhereloc($this->input->post('colid'));
		foreach ($departs as $depart){
           echo "<option value='".$depart->DEP_ID."'>".$depart->DEP_NAME."</option>";
		}
        }
         else {
            return redirect('auth/login');

        } 
}

	//**************************************************//
	public function AddSpeci(){

		$data['collAll'] = $this->Specialties_mod->getCollage();
        $this->load->view('Specialties/SpecialtiesAdd',$data);	

        }
	//*****************************************************//
	public function SpecialtieItems()
    {

         $items = array(
			 'SP_NAME' => $this->input->post('SP_NAME'),
			 'LOC_NO' => $this->input->post('LOC_NO'),
			 'DEP_ID' => $this->input->post('DEP_ID'),
			 'SP_DESC' => $this->input->post('SP_DESC'),
             'ENTRY_DATE' => date('d-M-y') ,
             'USR_NO' => user()->USR_NO 
			);
        $this->session->set_flashdata('Addspc', ' تم اضافة التخصص بنجاح  ');
        $this->Specialties_mod->addSpeci($items);
        return redirect('/Specialties_con');

        }
//*****************************************************//	
	public function SpecialtieEdit($spcid ,$depid ,$colid){
        
        if ($this->session->user->USR_NO == 10) {
		$data['spcall'] = $this->Specialties_mod->getSpeciWherecoldep($spcid,$depid,$colid);
        $data['deptall'] = $this->Specialties_mod->getDepartWherecol($depid,$colid);
		$data['collall'] = $this->Specialties_mod->getCollageWhere($colid);
        $this->load->view('Specialties/SpecialtiesEdit', $data);
        }
         else {
            return redirect('auth/login');

        } 
       
    }
	//*****************************************************//
	public function SpecialtieupdateItem(){
	   if ($this->session->user->USR_NO == 10) {
        $array = array(
            'SP_NAME' => $this->input->post('spc_name'),
			'SP_DESC' => $this->input->post('spc_desc'),
            'ENTRY_DATE' => date('d-M-y') ,
            'USR_NO' => user()->USR_NO 
        );
		$locno = $this->input->post('loc_no');
		$depid = $this->input->post('dep_no');
		$spacid = $this->input->post('sp_no');
		$this->Specialties_mod->updateSpeci($locno,$depid,$spacid,$array);
		$this->session->set_flashdata('editspc', ' تم تعديل بيانات التخصص بنجاح  ');
        return redirect('/Specialties_con');
    }
     else {
            return redirect('auth/login');

        } 
        }
    //*****************************************************//
	public function Specialtiedelete($spcid,$depid,$locid){
       if ($this->session->user->USR_NO == 10) {
        $this->Specialties_mod->deleteSpeci($spcid,$depid,$locid);
        $this->session->set_flashdata('deletspc', ' تم حذف التخصص بنجاح   ');
        return redirect('/Specialties_con');

    }
    else {
            return redirect('auth/login');

        } 
        } 
}
