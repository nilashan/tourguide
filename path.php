 <?php
    session_start();
    if(isset($_SESSION['username']))
   {
?>
<html>
<head>
<title>Vacationer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="new.css"/>
<link rel="stylesheet" href="Resource/style.css"/>
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

<body onLoad="init();" bgcolor="black">

<table width="972" align=CENTER>
  <tr> 
    <td width=964 height=240px background="Image/templatemo.jpg" bgcolor="#696969">&nbsp;</td>
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
          <td height="577" valign="top" bgcolor="#FFFF99"> 
            <FORM ACTION="logout_config.php" METHOD="POST">	
              <table width="956" height="33" bgcolor="#FFFF99">
                <tr> 
                  <td width="948" height="27" align="right" valign="top"> 
                    <input align="right" name="submit" type="submit" value="Logout"/> 
                  </td>
                </tr>
              </table>
				</FORM>
<blockquote>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
	var cenLat='<?php echo $_SESSION['lat']; ?>';
	var cenLng='<?php echo $_SESSION['lng']; ?>';
  var chicago = new google.maps.LatLng(cenLat,cenLng);
  var mapOptions = {
    zoom:9,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: chicago
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
  calcRoute()
}

function calcRoute() {
	var startLat='<?php echo $_SESSION['lat']; ?>';
	var startLng='<?php echo $_SESSION['lng']; ?>';
	var finishLat='<?php echo $_REQUEST['lat'] ?>';
	var finishLng='<?php echo $_REQUEST['lng']; ?>';
	
  var start = new google.maps.LatLng(startLat,startLng);
  var end = new google.maps.LatLng(finishLat,finishLng);
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.DirectionsTravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>




	<section id="sidebar">
		<div id="directions_panel"></div>
	</section>

	<section id="main">
		<div id="map-canvas" style="width: 100%; height: 540px;"></div>
	</section>
			
</blockquote>
            <p>&nbsp;</p></td>
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
}
   else
   {
    echo "You need to Register !";
    }
?>
