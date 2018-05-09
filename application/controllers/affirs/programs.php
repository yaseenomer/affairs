<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Programs  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('affirs/M_programs','program');
        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {


        $data['programs'] = $this->program->all();
        $data['delete'] = $this->session->flashdata('delete');
        $data['insert'] = $this->session->flashdata('insert');
        $this->load->view('Programs/index',$data);

    }


    /**
     * @param $id
     */
    public function show($id)
    {
        $data['update'] = $this->session->flashdata('update');
        $data['program'] = $this->program->find($id);
        $this->load->view('Programs/show',$data);
    }


    /**
     *
     */
    public function create()
    {
        $data['programs'] = $this->program->getProgramType();
        $this->load->view('Programs/create',$data);
    }


    /**
     *
     */
    public function insert()
    {
        $data = array(
            'PROG_ARAB_NAME' => $this->input->post('PROG_ARAB_NAME'),
            'PROG_ENG_NAME' => $this->input->post('PROG_ENG_NAME'),
            'LOC_NO' => $this->input->post('LOC_NO'),
            'DEP_ID' => $this->input->post('DEP_ID'),
            'PROG_TYP_ID' => $this->input->post('PROG_TYP_ID'),
            'PROG_STATUS' => $this->input->post('PROG_STATUS'),
            'PROG_INTRODUCTION' => $this->input->post('PROG_INTRODUCTION'),
            'PROG_SUMMARY' => $this->input->post('PROG_SUMMARY'),
            'PROG_OBJECTIVES' => $this->input->post('PROG_OBJECTIVES'),
            'THEORY_HOURS' => $this->input->post('THEORY_HOURS'),
            'PRACTICAL_HOURE' => $this->input->post('PRACTICAL_HOURS'),
            'APPROVED_DATE' => null,
            'MEET_ID' => 1,
            'ENTRY_DATE' => date('y-M-d'),
            'UPDATE_DATE' => date('y-M-d'),
            'USR_NO' => user()->USR_NO

        );

        $this->program->insert($data);
        $this->session->set_flashdata('insert', 'تمت إضافة برامج  بنجاح ');

        return redirect('/affirs/Programs');


    }


    public function edit($id)
    {
        $data['programs'] = $this->program->getProgramType();
        $data['collages'] =$this->program->getCollage();
        $data['program'] = $this->program->find($id);
        $this->load->view('Programs/edit',$data);

    }

    /**
     *
     */
    public function update()
    {

        $data = array(
            'PROG_ARAB_NAME' => $this->input->post('PROG_ARAB_NAME'),
            'PROG_ENG_NAME' => $this->input->post('PROG_ENG_NAME'),
            'LOC_NO' => $this->input->post('LOC_NO'),
            'DEP_ID' => $this->input->post('DEP_ID'),
            'PROG_TYP_ID' => $this->input->post('PROG_TYP_ID'),
            'PROG_STATUS' => $this->input->post('PROG_STATUS'),
            'PROG_INTRODUCTION' => $this->input->post('PROG_INTRODUCTION'),
            'PROG_SUMMARY' => $this->input->post('PROG_SUMMARY'),
            'PROG_OBJECTIVES' => $this->input->post('PROG_OBJECTIVES'),
            'THEORY_HOURS' => $this->input->post('THEORY_HOURS'),
            'PRACTICAL_HOURE' => $this->input->post('PRACTICAL_HOURS'),
            'APPROVED_DATE' => null,
            'MEET_ID' => 1,
            'ENTRY_DATE' => date('y-M-d'),
            'UPDATE_DATE' => date('y-M-d'),
            'USR_NO' => user()->USR_NO

        );
        $id = $this->input->post('id');

        $this->program->update($id, $data);


        $this->session->set_flashdata('update', 'تم تعديل   البرنامج   بنجاح ');

        return redirect('/affirs/Programs/show/'.$id);


    }


    /**
     *
     */
    public function delete($id)
    {
        $this->program->delete($id);
        $this->session->set_flashdata('delete', 'تم حزف    البرنامج   بنجاح ');
        return redirect('/affirs/Programs/');

    }

    /**
     * @param $id
     */
    public function approve($id)
    {
        $this->program->approve($id);
        $this->session->set_flashdata('approve', 'تم  تصديق     البرنامج   بنجاح ');
        return redirect('/affirs/Programs/show/'.$id);
    }

    /**
     * @param $id
     */
    public function desApprove($id)
    {
        $this->program->desApprove($id);
        $this->session->set_flashdata('desapprove', 'تم إلغاء تصديق     البرنامج   بنجاح ');
        return redirect('/affirs/Programs/show/'.$id);

    }


    /**
     * this function for java script get depart depend on collage
     */
    public function getDepart()
    {
       $departs = $this->program->getDepartWhereColID($this->input->post('collage'));

       foreach ($departs as $depart){
           echo "<option value='".$depart->DEP_ID."'>".$depart->DEP_NAME."</option>";
       }
    }

    /**
     *this function for java script get all  collages
     */
    public function coll()
    {
        echo json_encode($this->program->getCollage($this->input->post('collage')));
    }


}