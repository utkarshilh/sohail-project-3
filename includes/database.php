<?php
	//define parameters
	$host = "localhost";
	$port;
	$login = "root";
	$password = '';
	$database = "sudhanshu_maurya_educationalactiugi";
	$tblUsers = "sudhanshu_maurya_educationalactiugi_user_tbl";
	
  
	//Connect to the mysql server
	$conn = @new mysqli($host, $login, $password, $database, $port);

	//Handle connection errors 
	if (mysqli_connect_errno() != 0) {
	    $errno = mysqli_connect_errno();
	    $errmsg = mysqli_connect_error();
	    die("Connect Failed with: ($errno) $errmsg<br/>\n");
	}
?>

