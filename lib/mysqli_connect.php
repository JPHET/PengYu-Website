<?php 
	Define('DB_USER','root');
	Define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'pengyu');
	
	$dbcon=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
		OR die ('Could not connect to MySQL:' .mysqli_connect_error());
	mysqli_set_charset($dbcon,'utf8');
?>