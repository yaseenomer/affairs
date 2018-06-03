<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$tns = "
         (DESCRIPTION = 
             (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP) (HOST = 172.27.144.196) (PORT = 1521)))
                (CONNECT_DATA = (SID = ORCL)))";

/*
$tns = "
        (DESCRIPTION =
            (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP) (HOST = sarah) (PORT = 1521)))
               (CONNECT_DATA = (SID = ORCL)))";
                */
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
   'dsn'	=> '',
   'hostname' => $tns,
   'username' => 'ACD_AFF',
   'password' => 'A',
   'database' => '',
   'dbdriver' => 'oci8',
   'dbprefix' => '',
   'pconnect' => FALSE,
   'db_debug' => (ENVIRONMENT !== 'production'),
   'cache_on' => FALSE,
   'cachedir' => '',
   'char_set' => 'WE8ISO8859P1',
   'dbcollat' => 'WE8ISO8859P1',
   'swap_pre' => '',
   'encrypt' => FALSE,
   'compress' => FALSE,
   'stricton' => FALSE,
   'failover' => array(),
   'save_queries' => TRUE
);

