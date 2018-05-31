<?php
class EmpAccounts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth/auth_model','auth_model');
        $this->load->model('auth/M_EmpAccounts','emp');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');

    }

    /**
     *
     */
    public function index()
	{
        $data['notTeacher'] = $this->session->flashdata('notTeacher');
	   $this->load->view('auth/emp_accounts/main',$data);
	}

    public function emp()
    {
        $this->view('auth/emp_accounts/signin');
    }

    public function checkTeacher($id)
    {
        if ($this->emp->checkTeacher($id)){
            redirect(base_url('EmpAccounts/upgradeType/').$id);
        }
        $this->session->set_flashdata('notTeacher','عزرا الترقيات لفئة الاساتذة فقط');
        redirect(base_url('EmpAccounts'));
    }

    public function upgradeType($id)
    {
        $data['id'] = $id;

        $data['notConfirm'] = $this->session->flashdata('notConfirm');

        $this->load->view('auth/emp_accounts/upgrade_type',$data);
    }

    /**
     * this function check
     */
    public function checkType()
    {
        $query = $this->emp->checkType($this->input->post('emp_no'), $this->input->post('type'));

        if ($query){

            redirect(base_url('upgrades/Apply/create/'.$this->input->post('emp_no')));
        }

        $this->session->set_flashdata('notConfirm','لم تستوفي المدة الزمنية المطلوبة  للترقية تلك  ');


        redirect('EmpAccounts/upgradeType/'.$this->input->post('emp_no'));
    }


    /**
     * @param $page
     * @param bool $data
     */
    private function view($page, $data=false)
    {

        $this->load->view("auth/header.php");
        $this->load->view($page, $data);
        $this->load->view("auth/footer.php");
    }

    /**
     *
     */
    public function getEmp()
    {
        $this->session->set_userdata('emp_no', $this->input->post('emp_no'));

        $data['emp'] = $this->emp->get($this->session->emp_no);
        $this->view('auth/emp_accounts/details',$data);
    }

    /**
     *
     */
    public function register()
    {
        $data['error'] = $this->session->flashdata('error');
        $data['emp'] = $this->emp->get($this->session->emp_no);
        $this->view('auth/emp_accounts/register',$data);
    }

    /**
     *
     */
    public function save()
    {
        if (! $this->emp->checkEmpNoExist($this->input->post('EMP_NO'))){

            $this->emp->create($this->data());

        }else{
            $this->session->set_flashdata('error', 'هذا المستخدم موجود مسبقا  ');

            redirect('EmpAccounts/register');
        }
    }

    public function getSignIn()
    {
        $this->view('auth/emp_accounts/signin2');
    }


    /**
     *
     */
    public function postSignIn()
    {

        $auth = $this->emp->attempt(
            $this->input->post("username"),
            $this->input->post("password")
        );

        if (!$auth) {

            return redirect('EmpAccounts/getSignIn');

        }

        return redirect('/EmpAccounts');

    }
    public function logout()
    {
        $this->emp->logout();
    }

    /**
     *
     */
    public function t(){
        var_dump( $this->session->user);
    }

    /**
     * @return array
     */
    public function data()
    {
        $data = array(
            'EMP_NO' => $this->input->post('EMP_NO'),
            'USR_NAME' => $this->input->post('USR_NAME'),
            'PASSWORD' => password_hash($this->input->post('PASSWORD'), PASSWORD_DEFAULT),
            'LOC_NO' => $this->input->post('LOC_NO'),
            'DEP_ID' => $this->input->post('DEP_ID'),
            'EMAIL' => $this->input->post('EMAIL'),
            'ENTRY_DATE' => $this->input->post('ENTRY_DATE'),
            'UPDATE_DATE' => $this->input->post('UPDATE_DATE'),
            'USR_NO' => 26,
            'GROUP_ID' => 1,
        );
        return $data;
    }


}