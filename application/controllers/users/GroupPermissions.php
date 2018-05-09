<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class GroupPermissions  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/M_GroupPermission','perm');
        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {



        $data['alls'] = $this->perm->all();
        $data['insert'] = $this->session->flashdata('insert');
        $data['update'] = $this->session->flashdata('update');

        $this->load->view('users/grouppermission/index',$data);
    }


    /**
     *
     */
    public function create()
    {
        $data['groups'] = $this->perm->getGroups();
        $data['mains'] = $this->perm->getMainMenus();
        $this->load->view('users/grouppermission/create',$data);
    }

    public function add()
    {
        $group  = $this->input->post('GROUP_ID');
        $main = $this->input->post('MAIN_MENU_ID');
        $data['subs'] = $this->perm->getSubMenuWhere($main);
        $data['main'] = $this->perm->findMainMenu($main);
        $data['group'] = $this->perm->findGroup($group);
        $this->load->view('users/grouppermission/sub',$data);

    }



    /**
     *
     */
    public function insert()
    {

        $lin = count( $this->input->post('SUB_MENU_ID'));
        for ($i =0; $i < $lin ; $i ++){
            $data = array(
                'GROUP_ID'   => $this->input->post('GROUP_ID'),
                'SUB_MENU_ID'   => $this->input->post("SUB_MENU_ID[$i]"),
                'MAIN_MENU_ID'   => $this->input->post('MAIN_MENU_ID'),
                'GROUP_PRIV'   => $this->input->post('GROUP_PRIV'),
            );

             $this->perm->insert($data);


        }

    }


    /**
     * @param $id
     */
    public function edit($group,$main,$sub)
    {
        $data['fs'] = $this->perm->findAll($group,$main,$sub);

        var_dump($data);
//        $data['main']= $this->main->find($id);
//        $this->load->view('users/mainmenus/edit',$data);

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
        $id = $this->input->post('name');

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
    public function delete($group,$main,$sub)
    {
        $this->perm->delete($group,$main,$sub);
        $this->session->set_flashdata('delete', 'تم حذف  صلاحية  القائمة الفرعية   بنجاح  ');
        return redirect('/users/GroupPermissions');


    }

}
