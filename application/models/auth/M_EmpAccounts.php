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


    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function attempt($username, $password)
    {
        $this->db->where('USR_NAME', $username);

        $emp = $this->db->get('EMP_USER_ACCOUNTS')->row();
        if(!$emp){
            return false;
        }
        if (password_verify($password, $emp->PASSWORD)) {

            $this->session->set_userdata('empAccount', $emp);

            return true;
        }
        return false;
    }


    /**
     *
     */
    public function logout()
    {
        $this->session->unset_userdata('empAccount');

        return redirect('EmpAccounts/getSignIn','refresh');
    }


    /**
     * @param $id
     * @return bool
     */
    public function checkEmpNoExist($id)
    {
        return $this->db->where('EMP_NO', $id)
                ->limit(1)
                ->count_all_results('EMP_USER_ACCOUNTS') > 0;
    }

    /**
     * @param $data
     */
    public function create($data)
    {
        $this->db->insert('EMP_USER_ACCOUNTS',$data);
    }

    /**
     *
     */
    public function middlewareAuthEmp()
    {
        if (!$this->session->userdata('empAccount'))
        {
            redirect(base_url().'EmpAccounts/getSignIn');
        }
    }

    /**
     * @return  true if epm_type == 2  else @return false
     * @param $id
     * @return bool
     */
    public function checkTeacher($id)
    {
       $query = $this->db->where('EMP_NO',$id)->get('EMP_GRADES_VIEW')->row()->EMP_TYPE;
       if ($query == '2')
       {
           return true;
       }
       return false;

    }


    public function checkType($id ,$type)
    {
        $query = $this->db->where('EMP_NO',$id)->get('EMP_GRADES_VIEW')->row();

        if ($query->GRADE_NO == 2){
            if ($type == 1){
                if ($this->dateDiff($query->APP_DATE) >= 3){
                    return true;
                }
            }
            if ($type == 2){
                if ($this->dateDiff($query->APP_DATE) >= 5){
                    return true;
                }
            }
            if ($type == 3){
                if ($this->dateDiff($query->APP_DATE) >= 12){
                    return true;
                }
            }
        }
        if ($query->GRADE_NO == 3){
            if ($type == 1){
                if ($this->dateDiff($query->APP_DATE) >= 5){
                    return true;
                }
            }
            if ($type == 2){
                if ($this->dateDiff($query->APP_DATE) >= 7){
                    return true;
                }
            }

        }
        return false;

    }

    /**
     * @param $date
     * @return float
     */
    public function dateDiff($date)
    {
        $diff = date_diff( date_create(date('Y-m-d', strtotime($date))),date_create(date('Y-m-d')));
        $q =  $diff->format("%R%a")/365;
        return floor($q);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function remove($id){

        $this->db->where('EMP_NO',$id);

        return $this->db->delete('EMP_USER_ACCOUNTS');
    }



}