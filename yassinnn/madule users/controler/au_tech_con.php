<?php
class au_tech_con extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('index_tech_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');


    }
	public function index()
	{
		$this->getSignIn();
	}
		


   /* private function view($page, $data=false) {
        $this->load->view("auth/header.php");
        $this->load->view($page, $data);
        $this->load->view("auth/footer.php");
    }*/


    public function getSignIn()
    {
      //  if (isset($this->session->user)){
           // $data=$this->session->APPROVED_DATE,
           // user->GROUP_ID=8;
         //   return redirect('/mainController3');
       // }else {
            $this->view("auth/Teacher/index");
       // }

    }
    public function postSignIn()
    {
        $auth = $this->index_tech_model->attempt(
              $this->input->post("login"),
              $this->input->post("password")

        );

        if (!$auth) {

            return redirect('/au_tech_con/getSignIn');

        }
       
            return redirect('/mainController3');

    }

    public function logout()
    {
        $this->index_tech_model->logout();
    }
    public function gCreate_user()
    {
        $data['exist'] = $this->session->flashdata('exist');
        $this->view("auth/register", $data);
    }

  /*  public function pCreate_user()
    {

        $official_id= $this->input->post("number");
        $username = $this->input->post("login");
        $password = $this->input->post("password");
        $full_name = $this->input->post("name");
        $permition = "SUPER";
        $collage = 1;

        $this->index_tech_model->create_user($username, $permition,$password,$collage,$official_id,$full_name);


    }*/
	
	//========================= cpanel for users ==================================================================
  /*  public function view_user()
    {
        $data['gau'] = $this->index_tech_model->get_all_user();
        $data['coll'] = $this->index_tech_model->get_all_user_collage();
        $data['groups'] = $this->index_tech_model-> get_all_user_groups();
        $data['add'] = $this->session->flashdata('add');
        $data['error'] = $this->session->flashdata('error');
        $data['exist'] = $this->session->flashdata('exist');
        $this->load->view('users/newuser/adduser',$data);

    }

    public function getDepart()
    {
        $departs = $this->index_tech_model->get_user_collage($this->input->post('coll_id'));
        foreach ($departs as $depart){
            echo "<option value='".$depart->DEP_ID."'>".$depart->DEP_NAME."</option>";
        }
    }

    public function getuser(){
        $users = $this->index_tech_model->getuserwhere($this->input->post('coll_id'),$this->input->post('dep_id'));
        foreach ($users as $user){
            echo "<option value='".$user->EMP_NO."'>".iconv('windows-1256','utf-8',$user->EMP_NAME)."</option>";
        }
    }


    public function adduser()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('fullname','fullname id','required');
        $this->form_validation->set_rules('userid','empno id','required');
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
                    'OFFICIAL_ID'=>$this->input->post('userid'),
                    'DEP_ID'=>$this->input->post('dept'), 
                    'EMP_PW'=>password_hash($passwordconf,PASSWORD_DEFAULT)
                );
                $y=$this->index_tech_model->check_username_exist($this->input->post('logname'));
                if($y==true){
                    $this->session->set_flashdata('exist', 'إسم المستخدم موجود مسبقاً ');
                    redirect(base_url().'au_tech_con/view_user');
                }else{
                    $this->index_tech_model->saveuser($x);
                    $this->session->set_flashdata('add', 'تمت إضافة مستخدم بنجاح ');
                    redirect(base_url().'au_tech_con/view_user');
                }
            }else
            {
                $this->session->set_flashdata('error', 'كلمة المرور غير مطابقة أو الحقول لم يتم ملؤها بطريقة صحيحة');
                redirect(base_url().'au_tech_con/view_user');
            }
        }
    }
	
	 public function delete($id){
        $this->index_tech_model->remove($id);
        redirect(base_url().'au_tech_con/view_user');
    }
*/

//========================= End cpanel for users ==================================================================

}