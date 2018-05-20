<?php 
class database{
   
	 ###########         ##########
	 private $host= "localhost";
	 private $dbname= "student_affairs";
	 private $user="root";
	 private $pass="";
	 private $char_set='utf8';
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
    
	
     ########### insert  malti col###########
      function insert_par($table,$col,$values)
	    {
	
	      $c = count($col);
	      $str=" insert into ".$table." ( ";
	      $vs = "(";
	      if ($c > 0 )
	       {
		     for($i=0;$i<$c;$i++)
		      {
		        $str.=$col[$i].",";
		        $vs.="?,"; 
	         	}
	         }
	       $str= substr($str,0,strlen($str)-1)." )";
	       $vs = substr($vs,0,strlen($vs)-1)." )";
		   $last= $str." values ".$vs;
		   $q= $last;	
		   try 
		      {
		        $con = $this->connect();
		        $stmt = $con->prepare($q);
		        $stmt->execute($values);
		        return true;
	          }
	       catch ( Exception $e)
	          {
	            echo $e->getMessage();
	            return false;	
	          }
                }
     ########### insert one col ###########
	 function insert($table,$col,$values){
	  try {
		$con = $this->connect();
		$stmt = $con->prepare("insert into ".$table." (".$col.")  values (".$values.")" );
		$stmt->execute();
		return true;
	      }
	  catch (Exception $e )
	  {
		return false;
	  }
}
	 ########### update ###########
	 function update($table , $params , $cond , $cols )
      {
	    $con = $this->connect();
	    try {
	      $q = "update ".$table." set ".$cl." where ".$cond;
		  $stmt = $con->prepare($q);
		  $stmt->execute($params);
		  return true;
	        }
	    catch( Exception $e )
	      {
		    unset($con);
		    echo $e->getMessage();
		    return false;
		
	       }
     }
	 ########### update  malti col###########
      function up_all($table , $params , $cond , $cols )
         {
              $con = $this->connect();
		      $c = count($cols);
	          $str="";
		      if ($c > 0 )
	           {
		         for($i=0;$i<$c;$i++)
		            {
		              $str.=$cols[$i]."=?,";
		            }
	           }
	          $str= substr($str,0,strlen($str)-1);
			try 
	          {
			     $q = "update ".$table." set ".$str." where ".$cond;
				 $stmt = $con->prepare($q);
		         $stmt->execute($params);
		         return true;
	          }
	        catch( Exception $e )
	          {
		         unset($con);
		         echo $e->getMessage();
		         return false;
			   }
                 }
	 ########### delete ###########
	 function delete($table , $params , $cond )
     {
	  try {
		$con = $this->connect();
		$q = "delete from ".$table." where ".$cond;
		$stmt = $con->prepare($q);
		$stmt->execute($params);
		unset($con);
		return true;
	}
	 catch( Exception $e )
	   {
		unset($con);
		return false;
	   }
     }
	 ########### show_all ###########
        function show_all($table){
		 $con = $this->connect();
		 try
		   {
			$q = "select * from ".$table;
			$stmt = $con->prepare($q);
			$stmt->execute();
			unset($con);
			return $stmt->fetchAll(PDO::FETCH_BOTH);
		   }
		 catch (Exception $e)
		  {
			unset($con);
		  }
         }
	// ather class
	 ########### show ###########
	 function show($table,$col, $id){
	  $con = $this->connect();
      $result = $con ->prepare("SELECT ".$col." FROM " .$table ." WHERE id = :id");
	  $result->execute(array("id"=>$id));
      $row = $result->fetch();
      echo $row[$col];
      }
	  #################shows######
	  function shows($table,$col, $cond){
	  $con = $this->connect();
      $result = $con ->prepare("SELECT ".$col." FROM " .$table ." WHERE ". $cond);
	  $result->execute(array("id"=>$cond));
      $row = $result->fetch();
      echo $row[$col];
      }
	  ########### showf ###########
	 function showf($table){
	  $con = $this->connect();
		 try
		   {
			$q = "SELECT Publication,Marital_Status,LOCAL,Administrative_Unit,Neighborhood,Houseno,Chronic_diseases FROM health_insurance WHERE Student_ID = ".$table;
			$stmt = $con->prepare($q);
			$stmt->execute();
			unset($con);
			return $stmt->fetchAll(PDO::FETCH_BOTH);
		   }
		 catch (Exception $e)
		  {
			unset($con);
		  }
      }
	  ########### fill_select ###########
	  function fill_select($table , $key,$value, $params , $cond , $order,$msg)
	  	 {
	        $con = $this->connect();
	        $options = "<option value='' selected='selected'>".$msg."</option>";
	       try 
		      {
		        $query = "select ".$key.",".$value." from ".$table;
		        if( !empty($cond))
		          $query.=" where ".$cond;
		        $query.=" order by ".$order." ASC ";
		        echo "<br>".$query;
		        $stmt = $con->prepare($query);
		        if(!empty($params))
		          $stmt->execute($params);
		        else
		          $stmt->execute();
		          $res = $stmt->fetchAll(PDO::FETCH_BOTH);
	 		foreach($res as $r )
		      {
			    $options.="<option value=".$r[$key].">".$r[$value]."</option>";
		       } // end foreach
		        return $options;
	           } // end try
	        catch(Exception $e)
	            {
		           echo "error ..";
	            } // end catch
         } // end function
         
         #########################
         function secure_login($userid , $pass )
{
	$x = array();
	if ( $userid != "" && $pass != "")
	{
	  $con = $this->connect();
	  $q = "select * from users where userid=? and password=?";
	  $stmt = $con->prepare($q);
	  $stmt->bindValue(1,$userid,PDO::PARAM_STR);
	  $stmt->bindValue(2,md5($pass),PDO::PARAM_STR);
	  $stmt->execute();
	  if($stmt->rowCount() == 1 )
	  {
		  $res = $stmt->fetchAll(PDO::FETCH_BOTH);
		  foreach($res as $r )
		  {
		  $x['fname'] = $r["fullname"];
		  $x['uid'] = $r["userid"];
		  $x['status'] = $r["status"];
		  $x['group'] = $r["groupid"];
		  $x['login'] = 1;
		  }
	  }
	}
	unset($con);
	return $x;
}

         #########################
}//end class
?>