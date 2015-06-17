<?php
	session_start();
		$_SESSION['lat']=$_REQUEST[lat] ;
		$_SESSION['lng']=$_REQUEST[lng] ;
	header("location: main.php");
?>