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
	public function index()
	{
	   $this->view('auth/emp_accounts/signin');
	}

    private function view($page, $data=false) {
        $this->load->view("auth/header.php");
        $this->load->view($page, $data);
        $this->load->view("auth/footer.php");
    }

    public function getEmp()
    {
        $this->session->set_userdata('emp_no', $this->input->post('emp_no'));

        $data['emp'] = $this->emp->get($this->session->emp_no);
        $this->view('auth/emp_accounts/details',$data);
    }

    public function register()
    {
        $this->view('auth/emp_accounts/register');
    }
    public function save()
    {
        var_dump($this->input->post());
    }

    public function t(){
        echo $this->emp->get($this->session->emp_no);
    }



}