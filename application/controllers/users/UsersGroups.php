<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class UsersGroups  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/M_UsersGroups','group');
        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {



        $data['groups'] = $this->group->get();
        $data['insert'] = $this->session->flashdata('insert');
        $data['update'] = $this->session->flashdata('update');
        $data['delete'] = $this->session->flashdata('delete');

        $this->load->view('users/usersgroups/index',$data);
    }


    /**
     *
     */
    public function create()
    {

        $this->load->view('users/usersgroups/create');
    }



    /**
     *
     */
    public function insert()
    {
        $data = array(
            'GROUP_ID'   => $this->input->post('id'),
            'GROUP_NAME'   => $this->input->post('name'),
            'GROUP_DESC'   => $this->input->post('desc'),
        );

        v_num('id');
        v('name');

        if ($this->form_validation->run() === FALSE)
        {
            $this->create();

        }else{
            $this->group->insert($data);
            $this->session->set_flashdata('insert', 'تم حفظ المجموعة   بنجاح  ');
            return redirect('/users/usersgroups');
        }

    }


    /**
     * @param $id
     */
    public function edit($id)
    {
        echo $id;
        $data['group']= $this->group->find($id);
        $this->load->view('users/usersgroups/edit',$data);

    }

    /**
     *
     */
    public function update()
    {

        $id =  $this->input->post('id');
        $data = array(
            'GROUP_NAME'   => $this->input->post('name'),
            'GROUP_DESC'   => $this->input->post('desc'),
        );

        v_num('id');
        v('name');

        if ($this->form_validation->run() === FALSE)
        {
            $this->edit($id);

        }else{
            $this->group->update($id,$data);
            $this->session->set_flashdata('update', 'تم تعديل  المجموعة   بنجاح  ');
            return redirect('/users/usersgroups');
        }
    }

    /**
     *
     */
    public function delete($id)
    {
        $this->group->delete($id);
        $this->session->set_flashdata('delete', 'تم حذف   المجموعة   بنجاح  ');
        return redirect('/users/usersgroups');


    }

}
