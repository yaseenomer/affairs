<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class MainMenus  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/M_MainMenus','main');
        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {
        $data['mains'] = $this->main->get();
        $data['insert'] = $this->session->flashdata('insert');
        $data['update'] = $this->session->flashdata('update');
        $data['delete'] = $this->session->flashdata('delete');

        $this->load->view('users/mainmenus/index',$data);
    }


    /**
     *
     */
    public function create()
    {
        $this->load->view('users/mainmenus/create');
    }



    /**
     *
     */
    public function insert()
    {
        $data = array(
            'MAIN_MENU_NAME'   => $this->input->post('name'),
            'MAIN_MENU_DISC'   => $this->input->post('desc'),
        );

        v('name');

        if ($this->form_validation->run() === FALSE)
        {
            $this->create();

        }else{
            $this->main->insert($data);
            $this->session->set_flashdata('insert', 'تم حفظ القائمة   بنجاح  ');
            return redirect('/users/MainMenus');
        }

    }


    /**
     * @param $id
     */
    public function edit($id)
    {
        $data['main']= $this->main->find($id);
        $this->load->view('/users/mainmenus/edit',$data);

    }

    /**
     *
     */
    public function update()
    {
        $data = array(
            'MAIN_MENU_NAME'   => $this->input->post('name'),
            'MAIN_MENU_DISC'   => $this->input->post('desc'),
        );
        $id = $this->input->post('id');

        v('name');

        if ($this->form_validation->run() === FALSE)
        {
            $this->edit($id);

        }else{
            $this->main->update($id,$data);
            $this->session->set_flashdata('update', 'تم تعديل  القائمة   بنجاح  ');
            return redirect('/users/MainMenus');
        }
    }

    /**
     *
     */
    public function delete($id)
    {
        $this->main->delete($id);
        $this->session->set_flashdata('delete', 'تم حذف   القائمة   بنجاح  ');
        return redirect('/users/mainMenus/');


    }

}
