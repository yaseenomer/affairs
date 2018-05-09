<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ledger {
	private $my;
	private $year;
	private $opid;
	private $dates;
	private $col;
	
	public function __construct(){
		$this->my =& get_instance();
	    $this->year = date('Y');
		$this->opid = $this->my->session->operid;
		$this->uid = $this->my->session->user->USR_NO;
		$this->col = $this->my->session->user->LOC_NO;
		$this->dates = date('d-M-y');
		
	}
	
	
	
	public function journal($data)
	{
		$y = array();
		foreach($data as $d){
			$inner = array(
			 'YEAR_ID'=>$this->year,
	         'LOC_NO'=>$this->col,
	         'OPERATION_ID'=>$this->opid,
			 'LEV05_ID'=>$d->accid,
			 'CREDIT_AMOUNT'=>$d->credit,
			 'DEBIT_AMOUNT'=>$d->debit,
			 'USR_NO'=>$this->uid,
			 'ENTRY_DATE'=>$this->dates,
			 'UPDATE_DATE'=>$this->dates
			);
			array_push($y,$inner);
		}
		
		return $y;
	}
	
	
	public function validate_operation(){
		$this->my->form_validation->set_rules('company','الشركة','required',array('required'=>'مطلوب'));
		$this->my->form_validation->set_rules('college','college','required',array('required'=>'مطلوب'));
		$this->my->form_validation->set_rules('amount','amount','required|numeric',array('required'=>'مطلوب','numeric'=>'ارقام فقط'));
		$this->my->form_validation->set_rules('purchase_date','date','required',array('required'=>'مطلوب'));
		$this->my->form_validation->set_rules('desc','desc','required',array('required'=>'مطلوب'));
		
		if($this->my->form_validation->run() === FALSE)
		{
			//$this->my->load->view('cheques/new_purchase');
			return false;
		}
		else
		{
			return true;
		}
	}
	
	public function validate_cheque(){
		$this->my->form_validation->set_rules('cheque_id','cheque_id','required',array('required'=>'مطلوب'));
		$this->my->form_validation->set_rules('cheque_date','cheque_date','required',array('required'=>'مطلوب'));
		$this->my->form_validation->set_rules('total','total','required|numeric',array('required'=>'مطلوب','numeric'=>'ارقام'));
		$this->my->form_validation->set_rules('bankid','bankid','required',array('required'=>'مطلوب'));
		
		if($this->my->form_validation->run() === FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}


