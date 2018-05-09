<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructors_con  extends CI_Controller {

	
    public function __construct()
    {
        parent::__construct();

        $this->load->model('teachermodel');

    } //end of constructor 
	
	public function index()
	{
	     $data['d']= $this->teachermodel->show();
   	    $this->load->view('Instructors/Inst_show',$data);
		
	} //end of method 
	
	public function add_load()
	{
	    $data['degree'] = $this->teachermodel->get_degree();
		$data['loc']=$this->teachermodel->get_loc();
		$this->load->view('Instructors/Instructors',$data);
		
	} //end of method 
	// get department
	public function get_depart()
	{		
	  echo  $this->teachermodel->get_dept($this->input->post('loc_id'));
	} //end of method 
	
	
	
	public function get_emp()
	{	
    $res= $this->teachermodel->get_emp($this->input->post('loc_id'));
	echo iconv('windows-1256','UTF-8',$res);

	} //end of method 
	
	
	public function get_name()
	{	
    $res= $this->teachermodel->get_name($this->input->post('emp_no'));
	echo iconv('windows-1256','UTF-8',$res);

	} //end of method 
	public function add()
	{		
	    $final_file_name ="";
	    $x=$this->teachermodel->maxid();
		$id=$x+1;
	    $type=$this->input->Post('type');
		$eng=$this->input->Post('eng');
	    $deg=$this->input->Post('DEG');
	   // $user=$this->session->user->USR_NO ;
	    $user=10 ;
        $entry_date=date('d-m-y');
        $update_date=date('d-m-y');
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|docx|doc';
        $config['max_size'] = '500000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('cv')) {
            echo $this->upload->display_errors();
        } else {
          $res = $this->upload->data();
          $file_path = $res['file_path'];
          $file = $res['full_path'];
          $file_ext= $res['file_ext'];
          $final_file_name = $id.$file_ext;
         rename($file, $file_path . $final_file_name);
		}
		if($type==1)
		{
		$loc=$this->input->Post('loc');
	    $dept=$this->input->Post('dept');
		$num=$this->input->Post('num');
		$arb=$this->input->Post('emp_name');
	    $data=array('INS_ID'=> $id,'INS_ARAB_NAME'=> $arb,
		'INS_ENG_NAME'=>$eng ,'DEG_ID'=> $deg ,'LOC_NO'=> $loc ,'DEP_ID'=> $dept ,
		'INS_TYP'=>$type,'FILE_BATH'=> $final_file_name , 'EMP_NO'=>$num,'USR_NO'=>$user,
		'ENTRY_DATE'=>$entry_date,'UPDATE_DATE'=>$update_date);
         $res=$this->teachermodel->add($data);
		}
		if($type==2)
		{
        $arb=$this->input->Post('arab');
	    $data=array('INS_ID'=> $id,'INS_ARAB_NAME'=> $arb,
		'INS_ENG_NAME'=>$eng ,'DEG_ID'=> $deg ,
		'INS_TYP'=>$type,'FILE_BATH'=> $d ,'USR_NO'=>$user,
		'ENTRY_DATE'=>$entry_date,'UPDATE_DATE'=>$update_date);
         $res=$this->teachermodel->add($data);
		}
	    if($res ==0)
	    {
		  $this->session->set_flashdata('success', '  تم الحفظ بنجاح    ');
		   return redirect('/Instructors_con/');
	    }
	    else {
		if ($res[code]==00001){
		$this->session->set_flashdata('error','هذا البند تمت اضافته مسبقا');
		return redirect('/Instructors_con');
	    }
	    }
		
        } //end of method 
	
	 public function del($id){
   	 if($this->teachermodel->del($id)==true)
	 {
		  $this->session->set_flashdata('success', ' تم الحذف بنجاح  ');
		   return redirect('/Instructors_con/');
	 }
	  else {
		  $this->session->set_flashdata('error', 'فشلت العملية ');
		   return redirect('/Instructors_con/');
	  }
	  
        }//end of method 
		
    public function show($id)
    {    
     	$data['title'] = $id;
        $v = $this->teachermodel->get_Inst($id);
        $data['d']= $v;
        $this->load->view('Instructors/show_instDetails',$data);
     }//end of method
	
		
	
//fetch for edit

    public function fetch_edit($id)
    {
		 $data['degree'] = $this->teachermodel->get_degree();
		$data['loc']=$this->teachermodel->get_loc();
        $data['x'] = $this->teachermodel->fetch_edit($id);
        $this->load->view('Instructors/edit_Inst',$data);
    }
// done 
    function update() {
		 $final_file_name = "";
		$id= $this->input->post('id');
		$type= $this->input->post('typ');
        $eng=$this->input->Post('eng');
	    $deg=$this->input->Post('DEG');
	 // $user=$this->session->user->USR_NO ;
	    $user=10 ;
        $update_date=date('d-m-y');
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|docx|doc';
        $config['max_size'] = '500000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('cv')) {
            echo $this->upload->display_errors();
        } else {
          $res = $this->upload->data();
          $file_path = $res['file_path'];
          $file = $res['full_path'];
          $file_ext= $res['file_ext'];
          $final_file_name = $id.$file_ext;
         rename($file, $file_path . $final_file_name);
		}
		if($type==1)
		{
		$loc=$this->input->Post('loc');
	    $dept=$this->input->Post('dept');
		$num=$this->input->Post('num');
		
	    $data=array('INS_ENG_NAME'=>$eng ,'FILE_BATH'=> $final_file_name,'USR_NO'=>$user,'UPDATE_DATE'=>$update_date);
         $res=$this->teachermodel->update($id,$data);
		}
		if($type==2)
		{
        $arb=$this->input->Post('arab');
	    $data=array('INS_ARAB_NAME'=> $arb,'INS_ENG_NAME'=>$eng
		,'DEG_ID'=> $deg ,'FILE_BATH'=> $final_file_name ,'USR_NO'=>$user,
		'UPDATE_DATE'=>$update_date);
         $res=$this->teachermodel->update($id,$data);
		}
	    if($res ==0)
	    {
		  $this->session->set_flashdata('success', '  تم الحفظ بنجاح    ');
		   return redirect('/Instructors_con/');
	    }
	    else {
		if ($res[code]==00001){
		$this->session->set_flashdata('error','هذا البند تمت اضافته مسبقا');
		return redirect('/Instructors_con');
	    }
	    }
    } //end of method 
    
}
