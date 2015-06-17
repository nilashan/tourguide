<html>
<head>
<!-- TemplateBeginEditable name="doctitle" -->
<title>Vacationer</title>
<!-- TemplateEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../Resource/CSSSTYLE.css"/>
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
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>

<body bgcolor="#000000" text="#D6D6D6">
<table align=CENTER>
  <tr> 
    <td width=960px height=240px background="../Image/templatemo.jpg" bgcolor="#696969">&nbsp;</td>
  </tr>
  <tr> 
    <td height="35"> 
      <script>
			var el = document.getElementsByTagName("body")[0];
			el.className = "";
		</script>

  <nav id="topNav"> 
  <ul>
              
        <li><a href="../Index.php" title="Home">Home</a></li>	          
            
        <li><a href="#" title="records">records</a></li>
              
        <li><a href="" title="Gallery">Gallery</a></li>
		
		<li><a href="" title="Forum">About</a></li>
  </ul>
  </nav> 
  <script src="../Resource/jquery.js"></script>
        
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
    <td height="587" align="center" valign="top">
<FORM ACTION="../login_config.php" METHOD="POST">
        <table width="418" height="250" bgcolor="#FFFF99">
          <tr> 
            <td width="99"> User Name :</td>
            <td width="307"><input name="regname" type="text" > </td>
          </tr>
          <tr> 
            <td>password :</td>
            <td><input name="regpass" type="password"> </td>
          </tr>
          <tr> 
            <td colspan="2" align="right"><input name="submit" type="submit" value="Login"> 
            </td>
          </tr>
          <tr> 
            <td height="164" colspan="2">&nbsp;</td>
          </tr>
        </table>
      </FORM> </td>
  </tr>
  <tr> 
    <th height="31" align="center" valign="middle" ><font color="#FFFFCC" size="2" face="Times New Roman, Times, serif">&copy; 
      Copyright Vacationer.com 2013. All Rights reserved.</font> <nav id="topNav"></nav></th>
  </tr>
</table>
</body>
</html>
