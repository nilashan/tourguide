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

<body onload="init();" bgcolor="black">

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
<script type="text/javascript"
	src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
	var map;
	var id;
	
	//if(navigator.geolocation)
	//	{
	//	navigator.geolocation.getCurrentPosition(showPosition);
	//}else
	
		//var center = new google.maps.LatLng(6.984722, 81.0563);
		var cenLat='<?php echo $_SESSION['lat']; ?>';
		var cenLng='<?php echo $_SESSION['lng']; ?>';
		//var cenLat=6.984722;
		//var cenLng=81.0563;
		var center = new google.maps.LatLng(cenLat,cenLng);
	//	}
	
//	function showPosition(position){
	//	var center = new google.maps.LatLng(parseFloat(position.coords.latitude),parseFloat(position.coords.longitude));
	//}
	
	function getLocation(location) {
	
	}
	var geocoder = new google.maps.Geocoder();
	var infowindow = new google.maps.InfoWindow();

	function init() {

		var mapOptions = {
			zoom : 8,
			center : center,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		}
		map = new google.maps.Map(document.getElementById("map_canvas"),
				mapOptions);
				
		makeRequest('dbdetails.php', function(data) {
		
			var data = JSON.parse(data.responseText);

			for ( var i = 0; i < data.length; i++) {
				displayLocation(data[i]);
			}
		});
	}
	
	function displayLocation(loc) {
	
		//id=loc.employee_id;

		var button="<input type='button' value='Add Friend' onclick='saveData('"+loc.employee_id+"')'/>";

		var content = '<div class="infoWindow"><strong>' + loc.name
				+ '</strong>' + '<br/>' + loc.mobile_no + '<br/>'
				+ loc.employee_id + '<br/>'
				+ button +'</div>';
				
		var details=loc.name+"\n"+loc.mobile_no+"\n"+'<?php echo $_SESSION['lat']; ?>' ;

		if (parseInt(loc.latitude) == 0) {
			geocoder.geocode({
				'mobile_no' : loc.mobile_no
			}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {

				    var iconBase = 'Resource\icon';
					
					var marker = new google.maps.Marker({
						map : map,
						icon: iconBase + 'images.png',
						flat:true,
						draggable:true,
						position : results[i].geometry.loc,
						title : details

					});

					google.maps.event.addListener(marker, 'click', function() {
						//infowindow.setContent(content);
						//infowindow.open(map, marker);
						var x=window.confirm("Do you want to get the path for this place")
							if (x)
							window.location.href = "path.php?lat="+loc.latitude+"&lng="+loc.longitude;
					});

						}
				});
			} else {
		
				var iconBase = 'Resource/icon/';
			
				var position = new google.maps.LatLng(parseFloat(loc.latitude),
					parseFloat(loc.longitude));
				var marker = new google.maps.Marker({
					map : map,
					position : position,
					icon: iconBase + 'images.png',
					flat:true,
					draggable:true,
					title : details
				});

				google.maps.event.addListener(marker, 'click', function() {
					//infowindow.setContent(content);
					//infowindow.open(map, marker);
					
					var x=window.confirm("Do you want to get the path for this place")
						if (x)
						window.location.href = "path.php?lat="+loc.latitude+"&lng="+loc.longitude;
					
					});
				
			}

	}
	
	/*function saveData(id) {
		 window.location.href = "MemConfig.php?id="+id ;
	}*/
	
	function addOption(selectBox, text, value) {
		var option = document.createElement("OPTION");
		option.text = text;
		option.value = value;
		selectBox.options.add(option);
	}

	function makeRequest(url, callback) {
		var request;
		if (window.XMLHttpRequest) {
			request = new XMLHttpRequest();
		} else {
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}
		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				callback(request);
			}
		}
		request.open("GET", url, true);
		request.send();
	}
</script>




	<section id="sidebar">
		<div id="directions_panel"></div>
	</section>

	<section id="main">
		<div id="map_canvas" style="width: 100%; height: 540px;"></div>
	</section>
			
</blockquote>
            <table align="right" width="100%" height="4">
				<form name="form1" method="post" action="tourPlanConfig.php">
				  <tr><td align="right"><input type="submit" name="Submit" value="Get tour plan"></td></tr>
				</form>
			</table>
            <p>&nbsp;</p></td>
      </table>
	</td>
  </tr>
  <tr> 
    <th height="31" align="center" valign="middle" ><font color="#FFFFCC" size="2" face="Times New Roman, Times, serif">&copy; 
      Copyright Vacationer.com 2013. All Rights reserved.</font> <nav id="topNav"></nav></th>
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
