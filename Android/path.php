 <?php
    session_start();
	include('DBConnection.php');
	$result = mysql_query("SELECT * FROM temp");
				$count=mysql_num_rows($result);
					while($row = mysql_fetch_array($result)){
						$_SESSION['lat']=$row['lat'];
						$_SESSION['lng']=$row['lng'];
						//$_SESSION['lat']=9.84556248550001;
						//$_SESSION['lng']=80.24542110001;
					}
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

<body onload="init();" bgcolor="black">

<table width="972" align=CENTER>
  <tr> 
    <td height="587" valign="top"> 
      <table align=left height="60%" width="28%">
        <tr> 
          <td height="500" valign="top" bgcolor="#FFFF99"> 
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
  var city = new google.maps.LatLng(cenLat,cenLng);
  var mapOptions = {
    zoom:9,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: city
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
      </table>
	</td>
  </tr>
</table>
</body>
</html>
