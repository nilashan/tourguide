<?php
session_start();
include('DBConnection.php');

//echo $_REQUEST['id']; 
//echo $_REQUEST['lat']; 
//echo $_REQUEST['lng']; 

$sql_create_table="CREATE TABLE IF NOT EXISTS tourplan (ID INT NOT NULL AUTO_INCREMENT,  lat varchar(50), lng varchar(50), PRIMARY KEY (ID))";
			   
		$create = mysql_query($sql_create_table);
		
		if(!$create)
		{
			die('<h2>use other username</h2> '. mysql_error());
		}
		
		$insert="INSERT INTO tourplan (lat, lng)
		VALUES
		('$_REQUEST[lat]', '$_REQUEST[lng]')";
		
		$add_member = mysql_query($insert);
		
		if(!$add_member)
		{
			die('<h2>use other username</h2> '. mysql_error());
		}else{
			header("location: tourist.php");
		}
?>