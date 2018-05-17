<?php
/**
 * Created by PhpStorm.
 * User: ALFAFA
 * Date: 1/17/2018
 * Time: 8:58 AM
 */


class M_EmpAccounts extends CI_Model
{
    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->db->where('EMP_NO' ,$id)->get('EMPLOYEES_DETAILS')->row();
    }



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
        return redirect('auth/auth/getSignIn');
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

	
	 public function remove($d){
        $this->db->where('USR_NO',$d);
        return $this->db->delete('CREW');
    }


}