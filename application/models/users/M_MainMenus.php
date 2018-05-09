<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_MainMenus  extends CI_Model
{
  

    /**
     * @return mixed
     */
    public function get()
    {
        return  $this->db->get('MAIN_MENUS')->result();
    }

    /**
     * @param $id
     * @return mixed
     */

    public function find($id)
    {
        $this->db->where('MAIN_MENU_ID', $id);
        return  $this->db->get('MAIN_MENUS')->row();
    }


    /**
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('MAIN_MENUS', $data);
    }


    /**
     * @param $id
     * @param $data
     */

    public function update($id, $data)
    {
        $this->db->where('MAIN_MENU_ID', $id);
        $this->db->update('MAIN_MENUS', $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return  $this->db->delete('MAIN_MENUS', array('MAIN_MENU_ID' => $id ));
    }

}