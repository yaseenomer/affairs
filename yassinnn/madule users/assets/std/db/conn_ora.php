<?php

require_once('Database_ora.php');

 ########### call function connect   ########### 
 
$strTns      = "REG_SYS";
$strUser     = "STDAFFAIRS";
$strPassword = "STDAFFAIRS";
try{
$clsMyDB = new dbora($strUser,$strPassword,$strTns);
$con =$clsMyDB->connect($strUser,$strPassword,$strTns);
}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
########### Call to function select record ###########


?>
