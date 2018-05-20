<?php
class auth{
//require_once('db/database.php');
###########         ##########
	 private $host= "localhost";
	 private $dbname= "student_affairs";
	 private $user="root";
	 private $pass="";
	 private $char_set='utf8';
	 public $x = array();
	 ########### connect ##########
	 function connect(){
		try {
	   $db = new PDO('mysql:host='.trim($this->host).';dbname='.trim($this->dbname), trim($this->user), '');
	   $db->exec("SET CHARACTER SET utf8");
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   return $db;
		}
		catch ( Exception $e )
		{
			die("<h2>Service is unavailable now, try again later..</h2>");
		}
	}

    

    public function setLogin($login){
        $this->login = $login;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    /**
     * @return array $row
     */
	 
    public function login($fields, $table, $col_login, $col_password){
	$con = $this->connect();
	
        $query = $con->prepare('SELECT '.$fields.' FROM '.$table.' WHERE '.$col_login.' = :login AND '.$col_password.' = :password');
        $query->bindValue(':login',$this->login,PDO::PARAM_STR);
        $query->bindValue(':password',$this->password,PDO::PARAM_STR);
        $query->execute();
        if($query->rowCount() > 0){
            $row = $query->fetchAll(PDO::FETCH_BOTH);
			 foreach($row as $r )
		  {
		  $x['fname'] = $r["fullname"];
		  $x['uid'] = $r["userid"];
		  $x['status'] = $r["status"];
		  $x['group'] = $r["groupid"];
		  $x['login'] = 1;
		  }
            return $x;
        }else{
            return false;
        }
		
        $query->closeCursor();
    }    
}
/*****************

public function login($fields, $table, $col_login, $col_password){
	$con = $this->connect();
        $query = $con->prepare('SELECT '.$fields.' FROM '.$table.' WHERE '.$col_login.' = :login AND '.$col_password.' = :password');
        $query->bindValue(':login',$this->login,PDO::PARAM_STR);
        $query->bindValue(':password',$this->password,PDO::PARAM_STR);
        $query->execute();
        if($query->rowCount() > 0){
            $row = $query->fetch();
            return $row;
        }else{
            return false;
        }
        $query->closeCursor();
    }    
}
*/
?>