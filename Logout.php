<?php
	session_start();
	if(!isset($_SESSION['pengyu_access'])){
		header("location:login.php");
		exit();

     }else{
		setcookie('PHPSESSID', '', time()-42000, '/', '', 0, 0);
		$_SESSION=array();
		session_destroy();
		header("location:Login.php");
		exit();
}

?>