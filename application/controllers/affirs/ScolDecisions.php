<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 3/20/2018
 * Time: 3:23 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class ScolDecisions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('affirs/M_Scholarship_Decisions', 'dec');
        $this->auth_model->middlewareAuth();

    }

    /**
     *  The decision of the head of department
     */
    public function decDepart()
    {
        $data = array(
            'SCHOLAR_ID '   => $this->input->post('SCHOLAR_ID'),
            'DECISION_TYP '   => 1,
            ' EMP_NO '   => $this->input->post('EMP_NO'),
            'DECISION '   => $this->input->post('DECISION'),
            ' DECISION_DATE '   => date('y-M-d', strtotime($this->input->post('DECISION_DATE'))) ,
            ' RECOMMENDATION  '  => $this->input->post('RECOMMENDATION'),
            ' ENTRY_DATE '   => date('y-M-d'),
            ' UPDATE_DATE  '  => date('y-M-d'),
            ' USR_NO  '  => user()->USR_NO,
            ' CANDIDACY_TYPE  '  => $this->input->post('CANDIDACY_TYPE'),
        );

        $this->dec->Decision($data);

        redirect('affirs/Scholarship/show/'.$this->input->post('SCHOLAR_ID'));
    }

    /**
     *  The decision of the dean of collage
     */
    public function deanDecision()
    {
        $data = array(
            'SCHOLAR_ID '   => $this->input->post('SCHOLAR_ID'),
            'DECISION_TYP '   => 2,
            ' EMP_NO '   => $this->input->post('EMP_NO'),
            'DECISION '   => $this->input->post('DECISION'),
            ' DECISION_DATE '   => date('y-M-d', strtotime($this->input->post('DECISION_DATE'))) ,
            ' RECOMMENDATION  '  => $this->input->post('RECOMMENDATION'),
            ' ENTRY_DATE '   => date('y-M-d'),
            ' UPDATE_DATE  '  => date('y-M-d'),
            ' USR_NO  '  => user()->USR_NO,

        );

        $this->dec->Decision($data);

        redirect('affirs/Scholarship/show/'.$this->input->post('SCHOLAR_ID'));
    }

    /**
     *  The decision of the dean of collage
     */
    public function affairsDecision()
    {
        $data = array(
            'SCHOLAR_ID '   => $this->input->post('SCHOLAR_ID'),
            'DECISION_TYP '   => 3,
            ' EMP_NO '   => $this->input->post('EMP_NO'),
            'DECISION '   => $this->input->post('DECISION'),
            ' DECISION_DATE '   => date('y-M-d', strtotime($this->input->post('DECISION_DATE'))) ,
            ' RECOMMENDATION  '  => $this->input->post('RECOMMENDATION'),
            ' ENTRY_DATE '   => date('y-M-d'),
            ' UPDATE_DATE  '  => date('y-M-d'),
            ' USR_NO  '  => user()->USR_NO,
        );

        $this->dec->Decision($data);

        redirect('affirs/Scholarship/show/'.$this->input->post('SCHOLAR_ID'));
    }


    /**
     * The decision of the meeting
     */
    public function meeting()
    {
        $data = array(
            'SCHOLAR_ID '   => $this->input->post('SCHOLAR_ID'),
            'DECISION_TYP '   => 4,
            ' EMP_NO '   => $this->input->post('EMP_NO'),
            'DECISION '   => $this->input->post('DECISION'),
            ' DECISION_DATE '   => date('y-M-d', strtotime($this->input->post('DECISION_DATE'))) ,
            ' RECOMMENDATION  '  => $this->input->post('RECOMMENDATION'),
            ' ENTRY_DATE '   => date('y-M-d'),
            ' UPDATE_DATE  '  => date('y-M-d'),
            ' USR_NO  '  => user()->USR_NO,
        );

        $this->dec->Decision($data);

        redirect('affirs/Scholarship/show/'.$this->input->post('SCHOLAR_ID'));
    }




    public function t()
    {
       var_dump( $this->dec->Decision(3,1));
    }

}