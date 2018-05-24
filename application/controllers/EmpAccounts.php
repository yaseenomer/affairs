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
	   $this->view('auth/emp_accounts/signin');
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
        $data['emp'] = $this->emp->get($this->session->emp_no);
        $this->view('auth/emp_accounts/register',$data);
    }

    /**
     *
     */
    public function save()
    {
        if (! $this->emp->check_username_exist(1000857))
        {


        }
           echo 'allrady exist';

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
            'USR_NO' => 1,
            'GROUP_ID' => 1,
        );
        return $data;
    }


}