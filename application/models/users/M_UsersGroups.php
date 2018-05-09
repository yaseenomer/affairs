<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/24/2018
 * Time: 5:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class M_UsersGroups  extends CI_Model
{
   
    /**
     * @return mixed
     */
    public function get()
    {
        return  $this->db->get('USERS_GROUPS')->result();
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
        $this->db->insert('USERS_GROUPS', $data);
    }


    /**
     * @param $id
     * @param $data
     */

    public function update($id, $data)
    {
        $this->db->where('GROUP_ID', $id);
        $this->db->update('USERS_GROUPS', $data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return  $this->db->delete('USERS_GROUPS', array('GROUP_ID' => $id ));
    }

}