<?php
class authi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');


    }
	public function index()
	{
		$this->getSignIn();
	}
		


    private function view($page, $data=false) {
        $this->load->view("auth/header.php");
        $this->load->view($page, $data);
        $this->load->view("auth/footer.php");
    }


    public function getSignIn()
    {
        if (isset($this->session->user)){
            return redirect('/mainController');
        }else {
            $this->view("auth/login");
        }

    }
    public function postSignIn()
    {
        $auth = $this->auth_model->attempt(
              $this->input->post("login"),
              $this->input->post("password")
        );

        if (!$auth) {

            return redirect('/authi/getSignIn');

        }
       
            return redirect('/mainController');

    }

    public function logout()
    {
        $this->auth_model->logout();
    }
    public function gCreate_user()
    {
        $data['exist'] = $this->session->flashdata('exist');
        $this->view("auth/register", $data);
    }

    public function pCreate_user()
    {

        $official_id= $this->input->post("number");
        $username = $this->input->post("login");
        $password = $this->input->post("password");
        $full_name = $this->input->post("name");
        $permition = "SUPER";
        $collage = 1;

        $this->auth_model->create_user($username, $permition,$password,$collage,$official_id,$full_name);


    }
	
	//========================= cpanel for users ==================================================================
    public function view_user()
    {
        $data['gau'] = $this->auth_model->get_all_user();
        $data['coll'] = $this->auth_model->get_all_user_collage();
        $data['groups'] = $this->auth_model-> get_all_user_groups();
        $data['add'] = $this->session->flashdata('add');
        $data['error'] = $this->session->flashdata('error');
        $data['exist'] = $this->session->flashdata('exist');
        $this->load->view('users/newuser/adduser',$data);

    }
    public function adduser()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('fullname','fullname id','required');
        $this->form_validation->set_rules('empno','empno id','required');
        $this->form_validation->set_rules('logname','logname id','required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password confarirm', 'required');
        $this->form_validation->set_rules('group', 'group_id', 'required');
        if($this->form_validation->run() === FALSE)
        {
            $this->view_user();
        }
        else{
            $passwordconf = $this->input->post('pwd');
            $re = $this->input->post('passconf');
            if( $passwordconf==$re){
                $x = array(
                    'USR_NAME'=>$this->input->post('logname'),
                    'FULL_NAME'=>$this->input->post('fullname'),
                    'LOC_NO'=>$this->input->post('collge'),
                    'GROUP_ID'=>$this->input->post('group'),
                    'OFFICIAL_ID'=>$this->input->post('empno'),
                    'EMP_PW'=>password_hash($passwordconf,PASSWORD_DEFAULT)
                );
                $y=$this->auth_model->check_username_exist($this->input->post('logname'));
                if($y==true){
                    $this->session->set_flashdata('exist', 'إسم المستخدم موجود مسبقاً ');
                    redirect(base_url().'authi/view_user');
                }else{
                    $this->auth_model->saveuser($x);
                    $this->session->set_flashdata('add', 'تمت إضافة مستخدم بنجاح ');
                    redirect(base_url().'authi/view_user');
                }
            }else
            {
                $this->session->set_flashdata('error', 'كلمة المرور غير مطابقة أو الحقول لم يتم ملؤها بطريقة صحيحة');
                redirect(base_url().'authi/view_user');
            }
        }
    }
	
	 public function delete($id){
        $this->auth_model->remove($id);
        redirect(base_url().'authi/view_user');
    }

//========================= End cpanel for users ==================================================================




}