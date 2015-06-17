<?php
include('DBConnection.php');
if (isset($_POST['submit'])){

		if (		!$_POST['name']|
					!$_POST['email']|
					!$_POST['address']|
					!$_POST['lat']|
					!$_POST['lan']|
					!$_POST['username']|
					!$_POST['pass']|
					!$_POST['repass'])
		{

		die('Please complete all the required feilds!');
		}
	if($_POST['pass']==$_POST['repass'])
	{

		$sql_create_table="CREATE TABLE IF NOT EXISTS User (user_ID INT NOT NULL AUTO_INCREMENT,  Name varchar(50), address varchar(150), latitute varchar(50),longitute varchar(50), username varchar(50), 
							email varchar(150), password varchar(50), PRIMARY KEY (user_ID))";
		$create_table=mysql_query($sql_create_table);
		$insert="INSERT INTO User (Name,address,latitute,longitute, username, email, password)
		VALUES
		('$_POST[name]','$_POST[address]','$_POST[lat]','$_POST[lan]','$_POST[username]', '$_POST[email]', '$_POST[pass]')";
		
		$add_member = mysql_query($insert);
		
		if(!$add_member)
		{die('<h2>use other username</h2> ');
		}
	}else{
		die('<h2>Passward not match</h2> ');
	}
header("location: Index.php");
exit();
}else{
	die('<h2>You need to registor !</h2> ');
}
?>