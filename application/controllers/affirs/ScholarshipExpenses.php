<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class ScholarshipExpenses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('affirs/M_Scholarship_expenses','exp');
        $this->auth_model->middlewareAuth();

    }
    /******************************************************************/

    public function index()
    {
        $data['addexpen'] = $this->session->flashdata('addexpen');
        $data['editexpen'] = $this->session->flashdata('editexpen');
        $data['deleteexpen'] = $this->session->flashdata('deleteexpen');
        $data['Expenall'] = $this->exp->getALL();
        $this->load->view('Scholar_Expenses_view/Scholar_Expenses_show', $data);
    }

    public function Addexpenses(){
        $data['programs'] = $this->exp->getPrograms();
        $data['years'] = $this->exp->getYears();
        $this->load->view('Scholar_Expenses_view/Scholar_Expenses_get', $data);
    }

    public function getScholar(){
        $prog_id = $this->input->post('prog_typ');
        $year_id = $this->input->post('year_id');
        $data['Scholars'] = $this->exp->getScholar($prog_id,$year_id);
        $data['Expenses'] = $this->exp->getExpensestype();
        $data['Currencies'] = $this->exp->getCurrency();
        $this->load->view('Scholar_Expenses_view/Scholar_Expenses_Add', $data);
    }


    public function expensesItems(){

        $data = array(
            'SCHOLAR_ID' => $this->input->post('scholar_id'),
            'YEAR_ID' => $this->input->post('year_id'),
            'EXPENS_ID' => $this->input->post('expense_id'),
            'EXPENS_DATE' => date('d-M-y',strtotime($this->input->post('expense_date'))),
            'EXPENS_TYPE' => $this->input->post('expence_typ'),
            'CURRENCY_ID' => $this->input->post('currency_id'),
            'AMOUNT' => $this->input->post('amounte'),
            'ENTRY_DATE' => date('d-M-y'),
            'UPDATE_DATE' => date('d-M-y'),
            'USR_NO' => user()->USR_NO
        );
        $this->exp->insert($data);
        $id = $this->input->post('scholar_id');

        $uploaddata = handle_attache($id,'/affirs/Scholarship/show/'.$id);

        upload_attache_schol($id,$uploaddata,$this->input->post('type'));



        redirect('affirs/Scholarship/show/'.$this->input->post('scholar_id'));
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