<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class Scholarships_ext_con extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Scholarships_extend_model/Scholar_extend_model');
        $this->auth_model->middlewareAuth();

    }
/******************************************************************/

	public function index()
	{
		$data['addexpen'] = $this->session->flashdata('addexpen');
		$data['editexpen'] = $this->session->flashdata('editexpen');
        $data['deleteexpen'] = $this->session->flashdata('deleteexpen');
        $data['error'] = $this->session->flashdata('error');
        $data['Expenall'] = $this->Scholar_extend_model->getALL();
		$this->load->view('Scholarships_extend_view/Scholar_extend_show', $data);
    }
	
	public function Addextends(){
        $data['programs'] = $this->Scholar_extend_model->getPrograms();
        $data['years'] = $this->Scholar_extend_model->getYears();
		$this->load->view('Scholarships_extend_view/Scholar_extend_get', $data);
    }

    public function getScholar(){
        $prog_id = $this->input->post('prog_typ');
        $year_id = $this->input->post('year_id');
        $data['Scholars'] = $this->Scholar_extend_model->getScholar($prog_id,$year_id);
        $this->load->view('Scholarships_extend_view/Scholar_extend_Add', $data); 
    }
    
	
	public function extendItems(){

        $scol_id =  $this->input->post('scholar_id');

        $uploaddata = handle_attache($scol_id,'/affirs/Scholarship/show/'.$scol_id);

        upload_attache_schol($scol_id,$uploaddata,$this->input->post('type'));

        $this->session->set_flashdata('success', 'تم رفع الملف بنجاح');


		$data = array(
			'SCHOLAR_ID' => $this->input->post('scholar_id'),
			'EXT_SER' => rand(1,99),
			'EXT_DURRATION' => $this->input->post('EXT_DURRATION'),
			'START_DATE' =>date('d-M-y', strtotime($this->input->post('START_DATE'))),
			'END_DATE' => date('d-M-y',strtotime($this->input->post('END_DATE'))),
            'EXT_REASON' => $this->input->post('EXT_REASON'),
            'RECOMMENDATION' => $this->input->post('RECOMMENDATION'),
            'EMP_NO' => $this->input->post('super_name'),
            'ENTRY_DATE' => date('d-M-y'),
            'UPDATE_DATE' => date('d-M-y'),
            'USR_NO' => user()->USR_NO
        );
        

        $this->Scholar_extend_model->insert($data);
        $this->session->set_flashdata('addexpen', ' تم اضافة فترة التمديد بنجاح  ');
        return redirect('affirs/Scholarship/show/'.$scol_id);
	}
	
	// public function expensesupdateItem(){
    //     $data = array(
    //         'EXPENS_NAME' => $this->input->post('EXPENS_name'),
    //     );
	// 	$expense_id = $this->input->post('EXPENS_id');
    //     $this->Scholar_extend_model->update($expense_id,$data);
    //     $this->session->set_flashdata('editexpen', ' تم تعديل بيانات المصروف بنجاح ');
    //     return redirect('/Scholarships_Expenses_cont');	
        
    // }
	
	// public function Updateexpenses($id){
    //     $data['expense'] = $this->Scholar_extend_model->find($id);
    //     $this->load->view('Scholarships_extend_view/Scholar_Expenses_Update',$data);
	// }
	
	// public function deleteexpenses($id){
	// 	$this->Scholar_extend_model->deletecurrency($id);
    //     $this->session->set_flashdata('deleteexpen', ' تم حذف المصروف بنجاح ');
    //     return redirect('/Scholarships_Expenses_cont');
	// }
	
}
