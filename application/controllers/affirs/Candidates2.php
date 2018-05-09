<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidates2  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('affirs/M_candidates','cand');
        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {

        $data['cands']= $this->cand->getCands();
        $data['insert'] = $this->session->flashdata('insert');
        $data['update'] = $this->session->flashdata('update');
//var_dump($data);
      $this->load->view('candidates/show_candidate',$data);

    }

    /**
     * @param $id
     */
    public function show($id)
    {
        $data['update'] = $this->session->flashdata('update');
        $data['approve'] = $this->session->flashdata('approve');
        $data['desapprove'] = $this->session->flashdata('desapprove');
        $data['course'] = $this->cors->find($id);
        $this->load->view('courses/show',$data);
    }

    /**
     * @param $id
     */
    public function showcand($id){

   $data['empcand']= $this->cand->getEmpCand($id);
  //var_dump($data);
   $this->load->view('candidates/Showcand', $data);

}
    /**
     *
     */
public  function  showemp($id,$cou){
    $data['emps']= $this->cand->getEmpinfo($id,$cou);
    //var_dump($data);
    $this->load->view('candidates/Show', $data);
}
/*********************/
public function emp($id){
    $data['cid']=$id;
    $data['emp']= $this->cand->getempWhere($id);
    $this->load->view('candidates/Showcand', $data);
}
/************************/
    public function cands($emp,$cou)
    {
        $this->cand->update2($emp,$cou);
        $data['emps']= $this->cand->getEmpinfo($emp,$cou);
       // var_dump($data);
        $this->load->view('candidates/Show', $data);
     //   return redirect('/Candidates2');
    }
    /*********************/
    public function nocands($emp,$cou)
    {
        $this->cand->update3($emp,$cou);
        $data['emps']= $this->cand->getEmpinfo($emp,$cou);
        $this->load->view('candidates/Show', $data);
        //   return redirect('/Candidates2');
    }
    /*********************/
    public function lock_cand($cou)
    {
        $this->cand->update4($cou);
        $data['d']= $this->cand->GetCommittees_meeting_unlock();
        $this->load->view('candidates/show_candidate_lock',$data);
       // $data['emps']= $this->cand->getEmpinfo($emp,$cou);
       // $this->load->view('candidates/Show');
        //   return redirect('/Candidates2');
    }
    /*****************************************/
    public function approve($id)
    {
        $this->cors->approve($id);
        $this->session->set_flashdata('approve', 'تم  تصديق     الدورة    بنجاح ');
        return redirect('/affirs/courses/show/'.$id);
    }
/***************************************/
    public function desApprove($id)
    {
        $this->cors->desApprove($id);
        $this->session->set_flashdata('desapprove', 'تم إلغاء تصديق     الدورة   بنجاح ');
        return redirect('/affirs/courses/show/'.$id);

    }
}
