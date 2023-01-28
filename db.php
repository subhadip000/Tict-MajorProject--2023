<?php
  
    define('_HOST_NAME','127.0.0.1');
    define('_DATABASE_NAME','major_project_db');
    define('_DATABASE_USER_NAME','root');
    define('_DATABASE_PASSWORD','Sroot@001');
	ini_set('max_execution_time', 0); 
    set_time_limit(0);
    ini_set('memory_limit', '-1');
	 
    $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
    if($MySQLiconn->connect_errno)
        {
         die("ERROR : -> ".$MySQLiconn->connect_error);
        }
?>