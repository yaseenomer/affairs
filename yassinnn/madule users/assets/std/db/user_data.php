<?php
class user_data {
	public $name;
	public $userid;
	public $password;
	public $tel;
	public $email;
	public $status;
	public $group;
	
	function __construct(){
		$this->set_name($_POST['fullname']);
		$this->set_uid($_POST['userid']);
		$this->set_pass($_POST['password']);
		$this->set_tel($_POST['tel']);
		$this->set_email($_POST['email']);
		$this->set_group($_POST['group']);
		$this->set_status($_POST['status']);
	}
	//-----------------------------------------------------------------------------------
	function set_name($n){
		if ( $this->check_1($n))
		     $this->name=$n;
		else
		     $this->name=-1;
	}
	//------------------------------------------------------------------------------------
	function set_uid($uid){
		if ( $this->check_1($uid))
		     $this->userid=$uid;
		else
		     $this->userid=-1;
	}
	//-----------------------------------------------------------------------------------
	function set_pass($ad){
		if ( $this->check_1($ad))
		     $this->password=$ad;
		else
		     $this->password=-1;
	}
	//------------------------------------------------------------------------------------
	function set_tel($t){
		if ( $this->check_1($t))
		     $this->tel=$t;
		else
		     $this->tel="";
	}
	//------------------------------------------------------------------------------------
	function set_email($em){
		if ( $this->check_1($em))
		     $this->email=$em;
		else
		     $this->email="";
	}
	//------------------------------------------------------------------------------------
	function set_status($ty){
		$this->status = $ty;
	}
	//------------------------------------------------------------------------------------
	function set_group($p){
	   if ( $this->check_1($p))
	        $this->group= $p;
	   else
	        $this->group= -1;	
	}
	
	//------------------------------------------------------------------------------------
	function validate(){
		if( $this->name == -1 || $this->userid==-1 || $this->password==-1 || $this->group==-1)
		return false;
		return true;
	}
	//------------------------------------------------------------------------------------
	private function check_1($v){
		if ( isset($v) && !empty($v) )
		return true;
		return false;
	}
	//------------------------------------------------------------------------------------
	function print_data(){
		$str="name = ".$this->name."<br>pass=".$this->password."<br>status=".$this->status."<br>email=".
		     $this->email."<br>group=".$this->group."<br>tel = ".$this->tel;
			 echo $str."<br>";
	}
}
?>