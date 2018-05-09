<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidates  extends CI_Controller
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

        $this->load->view('candidates/index',$data);

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
     *
     */
    public function create()
    {
          $data['courses']= $this->cand->getCourse();
          $data['emps']= $this->cand->getEmps();
          $this->load->view('candidates/create', $data);
    }



    /**
     *
     */
    public function insert()
    {
        $data = array(
        'COUR_ID'   => $this->input->post('COUR_ID'),
        'EMP_NO'   => 2000033 ,//$this->input->post('EMP_NO'),
        'LOC_NO'   =>  user()->LOC_NO,
        'CAND_TYP'   =>  0 ,
        'REL_PHONE'   => $this->input->post('REL_PHONE'),
        'E_MAIL'   =>$this->input->post('E_MAIL'),
        'ENTRY_DATE'   =>date('y-M-d'),
        'UPDATE_DATE'   =>date('y-M-d'),
        'USR_NO '    => user()->USR_NO,

        );

        v_num('REL_PHONE');
        v_email('E_MAIL');



        if ($this->form_validation->run() === FALSE)
        {
            $this->create();

        }else{

            $this->cand->insert($data);
            $this->session->set_flashdata('insert', 'تم حفظ بيانات الكورس بنجاح  ');
            return redirect('/affirs/candidates');

        }

    }


    /**
     * @param $id
     */
    public function edit($id)
    {
        $data['cande']= $this->cand->find($id);
        $data['courses']= $this->cand->getCourse();
        $data['emps']= $this->cand->getEmps();

        $this->load->view('candidates/edit',$data);

    }

    /**
     *
     */
    public function update()
    {
        $data = array(
            'EMP_NO'   => 2000033 ,//$this->input->post('EMP_NO'),
            'LOC_NO'   =>  user()->LOC_NO,
            'CAND_TYP'   =>  0 ,
            'REL_PHONE'   => $this->input->post('REL_PHONE'),
            'E_MAIL'   =>$this->input->post('E_MAIL'),
            'ENTRY_DATE'   =>date('y-M-d'),
            'UPDATE_DATE'   =>date('y-M-d'),
            'USR_NO '    => user()->USR_NO,

        );


        $id = $this->input->post('old_course_id');

        $this->cand->update($id, $data);

        $this->session->set_flashdata('update', 'تم تعديل  بيانات المرشح  بنجاح  ');
        return redirect('/affirs/candidates');

    }

    /**
     *
     */
    public function delete($id)
    {
        $this->cand->delete($id);
        $this->session->set_flashdata('update', 'تم حذف   المرشح  بنجاح  ');
        return redirect('/affirs/candidates');


    }

}
