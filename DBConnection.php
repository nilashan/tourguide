<?php
 $conn = mysql_connect('localhost','root','');
  if(!$conn)
    {
		die("Could not connect" . mysql_error());
	}
	
 $db =mysql_select_db("Vacationer", $conn);
  if(!$db)
    {
		die("Could not select database" . mysql_error());
	}
?>
