<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_GroupPermission  extends CI_Model
{
   

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return  $this->db->get('USERS_GROUPS')->result();
    }

    public function findGroup($id)
    {
        $this->db->where('GROUP_ID', $id);
        return  $this->db->get('USERS_GROUPS')->row();
    }

    /**
     * @return mixed
     */
    public function getMainMenus()
    {
        return  $this->db->get('MAIN_MENUS')->result();
    }

    public function findMainMenu($id)
    {
        $this->db->where('MAIN_MENU_ID', $id);
        return  $this->db->get('MAIN_MENUS')->row();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSubMenuWhere($id)
    {
        $this->db->where('MAIN_MENU_ID', $id);
        return  $this->db->get('SUB_MENUS')->result();
    }

    /**********************************************************************************/


    public function all()
    {
        $this->db->select('*');
        $this->db->from('GROUP_PERMISSIONS');
        $this->db->join('USERS_GROUPS', 'USERS_GROUPS.GROUP_ID = GROUP_PERMISSIONS.GROUP_ID');
        $this->db->join('MAIN_MENUS', 'MAIN_MENUS.MAIN_MENU_ID = GROUP_PERMISSIONS.MAIN_MENU_ID');
        $this->db->join('SUB_MENUS', 'SUB_MENUS.SUB_MENU_ID = GROUP_PERMISSIONS.SUB_MENU_ID');
        return $this->db->get()->result();
    }

    public function findAll($group,$main,$sub)
    {

        $this->db->select('*');
        $this->db->from('GROUP_PERMISSIONS');
        $this->db->where('GROUP_PERMISSIONS.GROUP_ID', $group);
        $this->db->where('GROUP_PERMISSIONS.MAIN_MENU_ID', $main);
        $this->db->where('GROUP_PERMISSIONS.SUB_MENU_ID', $sub);
        $this->db->join('USERS_GROUPS', 'USERS_GROUPS.GROUP_ID = GROUP_PERMISSIONS.GROUP_ID');
        $this->db->join('MAIN_MENUS', 'MAIN_MENUS.MAIN_MENU_ID = GROUP_PERMISSIONS.MAIN_MENU_ID');
        $this->db->join('SUB_MENUS', 'SUB_MENUS.SUB_MENU_ID = GROUP_PERMISSIONS.SUB_MENU_ID');
        return $this->db->get()->result();
    }


    /**
     * @param $id
     * @return mixed
     */

    public function find($id)
    {
        $this->db->where('GROUP_ID', $id);
        return  $this->db->get('USERS_GROUPS')->row();
    }


    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('GROUP_PERMISSIONS', $data);
    }


    /**
     * @param $id
     * @param $data
     */

    public function update($group,$main,$sub)
    {
//        $this->db->where('GROUP_PERMISSIONS.GROUP_ID', $group);
//        $this->db->where('GROUP_PERMISSIONS.MAIN_MENU_ID', $main);
//        $this->db->where('GROUP_PERMISSIONS.SUB_MENU_ID', $sub);
//        $this->db->update('GROUP_PERMISSIONS', $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($group,$main,$sub)
    {
        return  $this->db->delete('GROUP_PERMISSIONS',
            array(
                'GROUP_ID' => $group ,
                'MAIN_MENU_ID' => $main ,
                'SUB_MENU_ID' => $sub ,
            ));
    }

}