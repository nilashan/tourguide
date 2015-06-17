 <?php
    session_start();
    if(isset($_SESSION['username']))
	{
		if(isset($_SESSION['lat']) || isset($_SESSION['lng']))
		{
?>
<html>
<head>
<title>Vacationer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="Resource/CSSSTYLE.css"/>
<link rel="stylesheet" href="new.css"/>
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

<table width="967" align=CENTER>
  <tr> 
    <td width=961 height=240px background="Image/templatemo.jpg" bgcolor="#696969">&nbsp;</td>
  </tr>
  <tr> 
    <td height="35"> 
      <script>
			var el = document.getElementsByTagName("body")[0];
			el.className = "";
		</script>

  <nav id="topNav"> 
  <ul>     
        <li><a href="main.php" title="Home">Home</a></li>
		<li><a href="members.php" title="Members">Members</a></li>
		<li><a href="#" title="Important_Places">Important Places</a>	   
		<ul>
			<li><a href="hotel.php" title="Hotel">Hotel</a></li>	
			<li><a href="medical.php" title="Medical Centers">Medical Centers</a></li>
		</ul>
		</li>
		<li><a href="tourist.php" title="Tourist Places">Tourist Places</a></li>       
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
		</script>
    </td>
  </tr>
  <tr> 
    <td height="587" valign="top"> 
      <table height="100%" width="100%">
        <tr> 
          <td width="73%" height="577" valign="top" bgcolor="#FFFF99"><blockquote>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p><strong><font color="#006600" size="3" face="Georgia, Times New Roman, Times, serif"><em>WELCOME 
                TO BEST TRAVEL GUIDE SERVICE IN SRI LANKA</em></font></strong> 
              </p>
              <p>&nbsp;</p>
              <div align="justify"> We're one of the leading travel guide services 
                in Sri Lanka. We offer our travel guide service island-wide and 
                know the best tourist attractions like the back of hand. Hailed 
                globally as the pearl of the Indian Ocean, Sri Lanka is one of 
                the most exciting tourist destinations. As the best tour guides 
                in Sri Lanka, we're determined to give you the most memorable 
                travelling experience in your life.<br>
                This is your one stop travel shop to discover and book the best 
                tour packages Sri Lanka promises. Choose from a range of best 
                tour packages in Sri Lanka or create one of your own and leave 
                the rest to us. Contact us now and embark on an unforgettable 
                Sri Lankan Tour today. 
                <p>&nbsp;</p>
              </div>
              <div align="justify">
                <p><br>
                  <font color="#006600" size="4" face="Georgia, Times New Roman, Times, serif"><strong><em>Sri 
                  Lanka</em></strong></font></p>
                <br>
                Sri Lanka is a beautiful island located in the Indian Ocean beneath 
                the Indian subcontinent and abounds in magnificent beaches, foggy 
                mountains, awesome ancient monuments, vast sanctuaries of wild-life, 
                dense rain forests and waterfalls and rapids.<br>
                A small island nation with an age-old reputation for hospitality 
                and a perfectly romantic landscape, Sri Lankan is an ideal destination 
                for tourists from all over the world whether you long for tranquility 
                or seek adventure and fun or wish to go sight-seeing or mingle 
                with the natives and learn about their way of life. 
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>
              
			  <table width="451" height="421" bgcolor="#FFFF99">
                <tr> 
								
                  <td width="128" height="34" bgcolor="#006600"><img src="Image/Imagemvg.png" width="32" height="32"> 
                    <font color="#FFFFCC" size="5"><strong>MISSION </strong></font></td>
								
                  <td width="119" bgcolor="#006600"><font size="5"><img src="Image/Imagemvg.png" width="32" height="32"><strong><font color="#FFFFCC">VISION</font></strong></font></td>
				</tr>
				  <tr> 
								
                  <td width="128">&nbsp; </td>
								
                  <td width="119"></td>
				</tr>
								
				</table>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </blockquote></td>
				
				
          <td width="27%" valign="top"> 
            <table  width="100%" height="44">
              <tr> 
                <td width="100%" height="100%" valign="top" bgcolor="#006600"> 
                  <h1><font color="#FFFFCC" size="6" face="Times New Roman, Times, serif">Vacationer</font></h1>
                </td>
              <tr> 
			</table>
						<FORM ACTION="logout_config.php" METHOD="POST">
							
              <table width="259" height="33" bgcolor="#FFFF99">
                <tr> 
                  <td width="247" height="27" align="right"><input align="right" name="submit" type="submit" value="Logout"/> 
                  </td>
                </tr>
              </table>
						</FORM>
            </td>
			<tr>
		</table>
	</td>
  </tr>
  <tr> 
    <th height="31" align="center" valign="middle" ><font color="#FFFFCC" size="2" face="Times New Roman, Times, serif"></font> <nav id="topNav"></nav></th>
  </tr>
</table>
</body>
</html>
<?php
	}else{
		header("location: setLocation.php");
	}
}else{
    echo "You need to Register !";
    }
?>
