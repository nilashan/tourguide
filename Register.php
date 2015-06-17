<html>
<head>
<title>Vacationer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="Resource/CSSSTYLE.css"/>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body bgcolor="#000000" text="#D6D6D6">
<table align=CENTER>
  <tr> 
    <td width=960px height=240px background="Image/templatemo.jpg" bgcolor="#696969">&nbsp;</td>
  </tr>
  <tr> 
    <td height="35"> 
      <script>
			var el = document.getElementsByTagName("body")[0];
			el.className = "";
		</script>

  <nav id="topNav"> 
  <ul>
              
        <li><a href="Index.php" title="Home">Home</a></li>	          
  </ul>
  </nav> 
  <script src="Resource/jquery.js"></script>
        
		<script>
			(function($){
				
				//cache nav
				var nav = $("#topNav");
				
				//add indicator and hovers to submenu parents
				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text(" ").appendTo($(this).children(":first"));

						//show subnav on hover
						$(this).mouseenter(function() {
							$(this).find("ul").stop(true, true).slideDown();
						});
						
						//hide submenus on exit
						$(this).mouseleave(function() {
							$(this).find("ul").stop(true, true).slideUp();
						});
					}
				});
			})(jQuery);
		</script></td>
  </tr>
  <tr> 
    <td height="283" align="center" valign="top" bordercolor="#FFFFCC" bgcolor="#FFFF99"> 
      <FORM ACTION="regconfig.php" METHOD="POST">
        <table width="279" height="477" bgcolor="#FFFF99">
          <tr> 
            <td height="40" colspan="2" bgcolor="#003300"> <div align="center"><font color="#003300" size="5">Vacationer 
                Registation</font></div></td>
          </tr>
          <tr> 
            <td width="271"> <p>Name </p>
              <p> 
                <input type="text" name="name" size="45">
              </p></td>
          </tr>
          <tr> 
            <td width="271"> <p>Email</p>
              <p> 
                <input type="text" name="email" size="45">
              </p></td>
          </tr>
          <tr> 
            <td width="271" height="51"> 
              <p>Address</p>
              <p> 
                <input type="text" name="address" size="45">
              </p></td>
          </tr>
          <tr> 
            <td width="271" height="62">
			<fieldset><p align="left"> 
                <a href="http://www.latlong.net/convert-address-to-lat-long.html" target="_blank"> 
                <font color="#FF0000">Click Here</font> </a>! To get the latitute &amp; longitute </p></fieldset>
			 <p>Latitute </p>
             
                <input type="text" name="lat" size="45">
				 </td>
          </tr>
          <tr> 
            <td width="271"> <p>Longitute</p>
              <p> 
                <input type="text" name="lan" size="45">
              </p></td>
          </tr>
          <tr> 
            <td width="271"> <p>Choose your username </p>
              <p> 
                <input type="text" name="username" size="45">
              </p></td>
          </tr>
          <tr> 
            <td><p>Create a password </p>
              <p> 
                <input name="pass" type="password" size="45">
              </p></td>
          </tr>
          <tr> 
            <td><p>Conform your password </p>
              <p> 
                <input name="repass" type="password" size="45">
              </p></td>
          </tr>
          <tr> 
            <td align="right"> <input name="reset" type="reset" value="Reset"/> 
              <input name="submit" type="submit" value="Submit"/> </td>
          </tr>
        </table>
        <label> </label>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </FORM> </td>
  </tr>
  <tr> 
    <th height="31" align="center" valign="middle" ><font color="#FFFFCC" size="2" face="Times New Roman, Times, serif"></font> <nav id="topNav"></nav></th>
  </tr>
</table>
</body>
</html>
