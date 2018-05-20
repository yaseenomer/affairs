<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/17/2018
 * Time: 8:58 AM
 */
class Auth_model extends CI_Model
{
    public function attempt($login, $password)
    {
        $this->db->where('USR_NAME', $login);
        $data = $this->db->get('CREW');
        $user = $data->row();
        if(!$user){
            return false;
        }
        if (password_verify($password, $user->EMP_PW)) {
            $this->session->set_userdata('user', $user);
            return true;
        }
        return false;
    }


   
    public function logout()
    {
        $this->session->unset_userdata('user');
        return redirect('auth/getSignIn');
    }

   

    public function check_username_exist($username = '')
    {

        if (empty($username))
        {
            return FALSE;
        }

        return $this->db->where('USR_NAME', $username)
                ->limit(1)
                ->count_all_results('CREW') > 0;
    }

    public function middlewareAuth()
    {
        if ( ! $this->session->userdata('user'))
        {
            redirect(base_url()."auth/auth/getSignIn", "refresh");
        }
    }

    public function get_collage_for_accounting_admin($collage = '')
    {
        if ($this->session->user->USR_NO == 10 ){

            if (empty($collage)) {

               return $id= 1;
            }else{
               return $id = $collage;
            }

        }else{
             return $id= $this->session->user->LOC_NO;
        }
    }

    public function get_collage_for_accounting_admin_specific($collage = '')
    {
        if ($this->session->user->USR_NO == 10 ){



        }
    }


//========================= END cheque reports ==================================================================
//========================= cpanel for users ==================================================================
    public function get_all_user_collage()
    {

        $this->db->select('*');
        $this->db->from('LOCATION_TYP');
        return  $this->db->get()->result();
    }
    public function get_all_user_groups()
    {
        $this->db->select('*');
        $this->db->from('USERS_GROUPS');
        return  $this->db->get()->result();
    }
    public function saveuser($userdata)
    {
        $this->db->insert('CREW', $userdata);
    }

   /* public function check_username_exist($username = '')
    {

        if (empty($username))
        {
            return FALSE;
        }

        return $this->db->where('USR_NAME', $username)
                ->limit(1)
                ->count_all_results('CREW') > 0;
    }*/
    public function get_all_user()
    {
        $this->db->select('*');
        $this->db->from('CREW');
        $this->db->join('LOCATION_TYP', 'CREW.LOC_NO = LOCATION_TYP.LOC_NO');
        $this->db->join('USERS_GROUPS', 'CREW.GROUP_ID = USERS_GROUPS.GROUP_ID');
        return  $this->db->get()->result();

    }
	
	 public function remove($d){
        $this->db->where('USR_NO',$d);
        return $this->db->delete('CREW');
    }
//========================= End cpanel for users ==================================================================


}