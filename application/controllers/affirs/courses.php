<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class courses  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('affirs/M_courses','cors');
        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {

        $data['courses']= $this->cors->getCourse();
        $data['insert'] = $this->session->flashdata('insert');
        $this->load->view('Courses/index',$data);

    }

    public function show($id)
    {
        $data['update'] = $this->session->flashdata('update');
        $data['approve'] = $this->session->flashdata('approve');
        $data['desapprove'] = $this->session->flashdata('desapprove');
        $data['course'] = $this->cors->find($id);
        $this->load->view('courses/show',$data);
    }


    public function create()
    {
        $data['programs']= $this->cors->getPrograms();
        $data['techers']= $this->cors->getTeachers();
        $data['countries']= $this->cors->getCountry();
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('Courses/create',$data);
    }

    /**
     * in this insert function in fact inserting in three table
     *  1)- courses 2)- courses instaractor 3)- courses attache
     */
    public function insert()
    {
        $cor_id = $this->cors->findMax()->id;

        $config['upload_path']          ='./uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|docx|';
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('attach'))
        {
            $this->session->set_flashdata('error', 'لم يتم رفع الملف ');
            return redirect('/affirs/courses/create');
        }

        $data_courses = array(
        'PROG_ID'   => $this->input->post('PROG_ID'),
        'COUR_START_DATE'   =>  date('y-M-d', strtotime($this->input->post('COUR_START_DATE'))),
        'COUR_END_DATE'   =>  date('y-M-d', strtotime($this->input->post('COUR_START_DATE'))),
        'START_TIME'   =>  $this->input->post('START_TIME'),
        'END_TIME'   => $this->input->post('END_TIME'),
        'COUR_STATUS'   =>$this->input->post('COUR_STATUS'),
        'COUR_SEATS'   =>$this->input->post('COUR_SEATS'),
        'COUNTRY_NO'   =>$this->input->post('COUNTRY_NO'),
        'COUR_PLACE'   =>$this->input->post('COUR_PLACE'),
        'COUR_FEES_EXPECTE'  =>$this->input->post('COUR_FEES_EXPECTE'),
        'ENTRY_DATE'   => $date = date('y-M-d'),
        'UPDATE_DATE'   =>date('y-M-d'),
        'USR_NO '    => user()->USR_NO,

        );

        $data_for_ins =array(
            'COUR_ID'   =>$cor_id+1,
            'INS_ID'   =>$this->input->post('tech'),
            'ENTRY_DATE'   =>date('y-M-d'),
            'UPDATE_DATE'   =>date('y-M-d'),
            'USR_NO '    => user()->USR_NO,
        );

        $success = array('upload_data' => $this->upload->data());

        $data_upload  =array(
            'COUR_ID'   =>$cor_id+1,
            'ATT_SER'   =>1,
            'FILE_BATH'   => $success['upload_data']['full_path'],
            'ENTRY_DATE'   =>date('y-M-d'),
            'UPDATE_DATE'   =>date('y-M-d'),
            'USR_NO '    => user()->USR_NO,
        );

        v_num('START_TIME');
        v_num('COUR_SEATS');
        v_num('END_TIME');

        if ($this->form_validation->run() === FALSE)
        {
            $this->create();
        }else{

            $this->cors->insert($data_courses);

            $this->cors->insertToCourIns($data_for_ins);

            $this->cors->upload($data_upload);

            $this->session->set_flashdata('insert', 'تم حفظ بيانات الكورس بنجاح  ');
            return redirect('/affirs/courses');
        }




    }


    public function edit($id)
    {
        $data['programs']= $this->cors->getPrograms();
        $data['countries']= $this->cors->getCountry();
        $data['cors']= $this->cors->find($id);

        $this->load->view('courses/edit',$data);

    }

    /**
     *
     */
    public function update()
    {
        $data = array(
            'COUR_ID' => $this->input->post('id'),
            'PROG_ID'   => $this->input->post('PROG_ID'),
            'COUR_START_DATE'   =>  date('y-M-d', strtotime($this->input->post('COUR_START_DATE'))),
            'COUR_END_DATE'   =>  date('y-M-d', strtotime($this->input->post('COUR_START_DATE'))),
            'START_TIME'   =>  $this->input->post('START_TIME'),
            'END_TIME'   => $this->input->post('END_TIME'),
            'COUR_STATUS'   =>$this->input->post('COUR_STATUS'),
            'COUR_SEATS'   =>$this->input->post('COUR_SEATS'),
            'COUNTRY_NO'   =>$this->input->post('COUNTRY_NO'),
            'COUR_PLACE'   =>$this->input->post('COUR_PLACE'),
            'ENTRY_DATE'   =>date('y-M-d'),
            'UPDATE_DATE'   =>date('y-M-d'),
            'USR_NO '    => user()->USR_NO,

        );


        $id = $this->input->post('id');

        $this->cors->update($id, $data);

        $this->session->set_flashdata('update', 'تم تعديل  بيانات الكورس بنجاح  ');
        return redirect('/affirs/courses/show/'.$id);

    }

    /**
     *
     */
    public function delete($id)
    {
        $this->cors->delete($id);
        return redirect('/affirs/courses');

    }

    /**
     * @param $id
     */
    public function approve($id)
    {
        $this->cors->approve($id);
        $this->session->set_flashdata('approve', 'تم  تصديق     الدورة    بنجاح ');
        return redirect('/affirs/courses/show/'.$id);
    }

    /**
     * @param $id
     */
    public function desApprove($id)
    {
        $this->cors->desApprove($id);
        $this->session->set_flashdata('desapprove', 'تم إلغاء تصديق     الدورة   بنجاح ');
        return redirect('/affirs/courses/show/'.$id);

    }

    public function t()
    {
     echo  $this->cors->findMax()->id;

    }
}