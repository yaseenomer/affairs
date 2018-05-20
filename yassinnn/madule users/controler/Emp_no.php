<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_no  extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('EmpNoModel');
      //  $this->auth_model->middlewareAuth();

    }
    /***********************************************************/
	public function index()
	{
	        $data['approve']     = $this->session->flashdata('approve');
            $data['addcon']      = $this->session->flashdata('addcon');
            $data['editcon']     = $this->session->flashdata('editcon');
            $data['deletecon']   = $this->session->flashdata('deletecon');
            $data['dis_approve'] = $this->session->flashdata('dis_approve');
            //$data['generals'] = $this->EmpnoModel->GetEmpname();
		    $this->load->view('emp_account/Employees_NO');
	}
    /***********************************************************/
     public  function Teacher(){

         $this->load->view('auth/Teacher/index');

     }
    /***********************************************************/
    public  function empno(){

        $this->load->view('auth/Teacher/empno');

    }
    /***********************************************************/
    public  function forgot(){

        $this->load->view('auth/Teacher/forgot');

    }
    /***********************************************************/
    public  function register(){

        $this->load->view('auth/Teacher/register');

    }
    /***********************************************************/
    public function Search()
    {
         $EMP_NO = $this->input->post('EMP_NO');
         $data['generals']   =  $this->EmpNoModel->GetEmpnameWhere($EMP_NO);
          $this->load->view('Employees/EmployeesInfo',$data);
         // var_dump($data);
        // return redirect('/Emp_name');
    }
    /***********************************************************/
    public function Search_emp()
    {
        $EMP_NO = $this->input->post('EMP_NO');
        $this->session->set_userdata('EMP_NO_T',$EMP_NO);
//var_dump($EMP_NO);
//exit;
        $data['generals']   =  $this->EmpNoModel->GetEmpnameWhere($EMP_NO);

       $this->load->view('emp_account/EmployeesInfo',$data);
       //  var_dump($data);
        // return redirect('/Emp_name');
    }
    /***********************************************************/
    public function create()
    {

        $this->load->view('emp_account/Add');
    }
    /***********************************************************/
    public function view_user()
    {
    //    $data['gau'] = $this->EmpNoModel->get_all_user();
        $data['coll'] = $this->EmpNoModel->get_all_user_collage();
       // $data['groups'] = $this->EmpNoModel-> get_all_user_groups();
        $data['add'] = $this->session->flashdata('add');
        $data['error'] = $this->session->flashdata('error');
        $data['exist'] = $this->session->flashdata('exist');
        $this->load->view('emp_account/Add',$data);

    }
    /***********************************************************/
    public function insert()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('USER_NAME','USER_NAME ','required');
        $this->form_validation->set_rules('PASSWORD','PASSWORD ','required');
        $this->form_validation->set_rules('REPASSWORD','REPASSWORD ','required');
        $this->form_validation->set_rules('EMAIL', 'EMAIL', 'required');
       // $this->form_validation->set_rules('passconf', 'Password confarirm', 'required');
      //  $this->form_validation->set_rules('group', 'group_id', 'required');
        if($this->form_validation->run() === FALSE)
        {
            $this->view_user();
        }
        else{
            $PASSWORD = $this->input->post('PASSWORD');
            $re = $this->input->post('REPASSWORD');
            if( $PASSWORD==$re){
                $x = array(
                    'EMP_NO'   => $this->session->EMP_NO,
                    'USR_NAME'   => $this->input->post('USER_NAME'),
                    'PASSWORD'   => password_hash($PASSWORD,PASSWORD_DEFAULT),
                    'LOC_NO'   => $this->session->LOC_NO,
                    'DEP_ID'   => $this->session->DEP_ID,
                    'EMAIL'   => $this->input->post('EMAIL'),
                    'ENTRY_DATE'   => date('d-M-y') ,
                    'UPDATE_DATE'   =>date('d-M-y') ,
                    'USR_NO'   =>  user()->USR_NO ,
                    'GROUP_ID'=>8,

                );
                $y=$this->EmpNoModel->check_username_exist($this->input->post('USR_NAME'));
                if($y==true){
                    $this->session->set_flashdata('exist', 'إسم المستخدم موجود مسبقاً ');
                    redirect(base_url().'Emp_no/empno');
                }else{
                    $this->EmpNoModel->saveuser($x);
                    $this->session->set_flashdata('add', 'تمت إضافة مستخدم بنجاح ');
                    redirect(base_url().'Emp_no/Teacher');
                }
            }else
            {
                $this->session->set_flashdata('error', 'كلمة المرور غير مطابقة أو الحقول لم يتم ملؤها بطريقة صحيحة');
                redirect(base_url().'Emp_no/empno');
            }
        }

      /*  $data = array(
            'EMP_NO'   => $this->input->post('EMP_NO'),
            'USER_NAME'   => $this->input->post('USER_NAME'),
            'PASSWORD'   => $this->input->post('PASSWORD'),
            'REPASSWORD'   => $this->input->post('REPASSWORD'),
            'LOC_NO'   => $this->input->post('LOC_NO'),
            'DEP_ID'   => $this->input->post('DEP_ID'),
            'EMAIL'   => $this->input->post('EMAIL'),
            'ENTRY_DATE'   => $this->input->post('ENTRY_DATE'),
            'UPDATE_DATE'   => $this->input->post('UPDATE_DATE'),
            'USR_NO'   => $this->input->post('USR_NO')
        );

*/

        if ($this->form_validation->run() === FALSE)
        {
            $this->create();

        }else{
            $this->group->insert($data);
            $this->session->set_flashdata('insert', 'تم انشاء حساب   بنجاح  ');
            return redirect('/Emp_no/');
        }

    }
    /***********************************************************/
}
