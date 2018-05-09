<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class Scholarships_Expenses_cont extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Scholar_expenses_model/Scholar_expenses_model');
        $this->auth_model->middlewareAuth();

    }
/******************************************************************/

	public function index()
	{
		$data['addexpen'] = $this->session->flashdata('addexpen');
		$data['editexpen'] = $this->session->flashdata('editexpen');
		$data['deleteexpen'] = $this->session->flashdata('deleteexpen');
        $data['Expenall'] = $this->Scholar_expenses_model->getALL();
		$this->load->view('Scholar_Expenses_view/Scholar_Expenses_show', $data);
    }
	
	public function Addexpenses(){
        $data['programs'] = $this->Scholar_expenses_model->getPrograms();
        $data['years'] = $this->Scholar_expenses_model->getYears();
		$this->load->view('Scholar_Expenses_view/Scholar_Expenses_get', $data);
    }

    public function getScholar(){
        $prog_id = $this->input->post('prog_typ');
        $year_id = $this->input->post('year_id');
        $data['Scholars'] = $this->Scholar_expenses_model->getScholar($prog_id,$year_id);
        $data['Expenses'] = $this->Scholar_expenses_model->getExpensestype();
        $data['Currencies'] = $this->Scholar_expenses_model->getCurrency(); 
        $this->load->view('Scholar_Expenses_view/Scholar_Expenses_Add', $data); 
    }
    
	
	public function expensesItems(){
		$data = array(
            'SCHOLAR_ID' => $this->input->post('scholar_id'),
            'YEAR_ID' => $this->input->post('year_id'),
            'EXPENS_ID' => $this->input->post('expense_id'),
            'EXPENS_DATE' => date('y-M-d',strtotime($this->input->post('expense_date'))),
            'EXPENS_TYPE' => $this->input->post('expence_typ'),
            'CURRENCY_ID' => $this->input->post('currency_id'),
            'AMOUNT' => $this->input->post('amounte'),
            'ENTRY_DATE' => date('y-M-d'),
            'UPDATE_DATE' => date('y-M-d'),
            'USR_NO' => user()->USR_NO
        );
        $this->Scholar_expenses_model->insert($data);
        $this->session->set_flashdata('addexpen', ' تم اضافة المصروف بنجاح ');
        return redirect('/Scholarships_Expenses_cont');	
	}
	
	// public function expensesupdateItem(){
    //     $data = array(
    //         'EXPENS_NAME' => $this->input->post('EXPENS_name'),
    //     );
	// 	$expense_id = $this->input->post('EXPENS_id');
    //     $this->Scholar_expenses_model->update($expense_id,$data);
    //     $this->session->set_flashdata('editexpen', ' تم تعديل بيانات المصروف بنجاح ');
    //     return redirect('/Scholarships_Expenses_cont');	
        
    // }
	
	// public function Updateexpenses($id){
    //     $data['expense'] = $this->Scholar_expenses_model->find($id);
    //     $this->load->view('Scholar_Expenses_view/Scholar_Expenses_Update',$data);
	// }
	
	// public function deleteexpenses($id){
	// 	$this->Scholar_expenses_model->deletecurrency($id);
    //     $this->session->set_flashdata('deleteexpen', ' تم حذف المصروف بنجاح ');
    //     return redirect('/Scholarships_Expenses_cont');
	// }
	
}