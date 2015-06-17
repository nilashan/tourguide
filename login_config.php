<?php
session_start();
include('DBConnection.php');
if (isset($_POST['login'])){

			$result = mysql_query("SELECT * FROM user WHERE username = '$_REQUEST[username]' AND password = '$_REQUEST[pass]'");
			$count=mysql_num_rows($result);
 
			if ($count > 0){
			$_SESSION['username']=$_REQUEST[username] ;
			$_SESSION['pass']=$_REQUEST[pass] ;
			header('location:setLocation.php');
			}else {

?>
<script type="text/javascript">
      alert("User name or Passward is wrong!");
	  history.back();
</script>
<?php
			}
}
?>

