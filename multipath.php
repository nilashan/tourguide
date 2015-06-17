<?php
	session_start();
		include('DBConnection.php');
		//$_SESSION['lat']=$_REQUEST[lat] ;
		//$_SESSION['lng']=$_REQUEST[lng] ;
		$x=0;
		$result = mysql_query("SELECT * FROM temp_plan");
				$count=mysql_num_rows($result);
					while($row = mysql_fetch_array($result)){
						$placeLat[$x]=$row['lat'];
						$placeLng[$x]=$row['lng'];
						$x++;
					}
					for($i=0;$i<$count-1;$i++){
						$sample= Get_Address_From_Google_Maps($placeLat[$i],$placeLng[$i]);
						$Address[$i]=d($sample);
						}
						
		$result = mysql_query("DROP TABLE tourplan,temp_plan");	
					
//$sample = Get_Address_From_Google_Maps(40.714224,-73.961452);
//$address=d($sample);
function Get_Address_From_Google_Maps($lat, $lon) {
 
    $url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lon&sensor=false";
 
    // Make the HTTP request
    $data = @file_get_contents($url);
    // Parse the json response
    $jsondata = json_decode($data,true);
 
    // If the json data is invalid, return empty array
    if (!check_status($jsondata))    return array();
 
    $address = array(
					google_getCountry($jsondata),
					google_getProvince($jsondata),
					google_getCity($jsondata),
					google_getStreet($jsondata),
					google_getPostalCode($jsondata),
					google_getCountryCode($jsondata),
					google_getAddress($jsondata),
    );
 
    return $address;
}
 
/* 
* Check if the json data from Google Geo is valid 
*/
 
function check_status($jsondata) {
    if ($jsondata["status"] == "OK") return true;
    return false;
}
 
/*
* Given Google Geocode json, return the value in the specified element of the array
*/
 
function google_getCountry($jsondata) {
    return Find_Long_Name_Given_Type("country", $jsondata["results"][0]["address_components"]);
}
function google_getProvince($jsondata) {
    return Find_Long_Name_Given_Type("administrative_area_level_1", $jsondata["results"][0]["address_components"], true);
}
function google_getCity($jsondata) {
    return Find_Long_Name_Given_Type("locality", $jsondata["results"][0]["address_components"]);
}
function google_getStreet($jsondata) {
    return Find_Long_Name_Given_Type("street_number", $jsondata["results"][0]["address_components"]) . ' ' . Find_Long_Name_Given_Type("route", $jsondata["results"][0]["address_components"]);
}
function google_getPostalCode($jsondata) {
    return Find_Long_Name_Given_Type("postal_code", $jsondata["results"][0]["address_components"]);
}
function google_getCountryCode($jsondata) {
    return Find_Long_Name_Given_Type("country", $jsondata["results"][0]["address_components"], true);
}
function google_getAddress($jsondata) {
    return $jsondata["results"][0]["formatted_address"];
}
 
/*
* Searching in Google Geo json, return the long name given the type. 
* (If short_name is true, return short name)
*/
 
function Find_Long_Name_Given_Type($type, $array, $short_name = false) {
    foreach( $array as $value) {
        if (in_array($type, $value["types"])) {
            if ($short_name)    
                return $value["short_name"];
            return $value["long_name"];
        }
    }
}
 
/*
*  Print an array
*/
 
function d($a) {
    $add=$a[0].", ".$a[1].", ".$a[2].", ".$a[3].", ".$a[4];
	return $add;
}
?>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
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
    zoom: 6,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: chicago
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
}

function calcRoute() {
	var cenLat='<?php echo $_SESSION['lat']; ?>';
	var cenLng='<?php echo $_SESSION['lng']; ?>';
  var start = new google.maps.LatLng(cenLat,cenLng);
  var end = new google.maps.LatLng(cenLat,cenLng);
  // var start = 'United States, NY, Brooklyn';
  //var end = 'United States, NY, Brooklyn';
  //var newp = 'United States, NY, Brooklyn, 277 Bedford Avenue, 11211';
  var waypts = [];
  var checkboxArray = document.getElementById('waypoints');
  for (var i = 0; i < checkboxArray.length; i++) {
    if (checkboxArray.options[i].selected == true) {
      waypts.push({
          location:checkboxArray[i].value,
          stopover:true});
    }
  }

  var request = {
      origin: start,
      destination: end,
      waypoints: waypts,
      optimizeWaypoints: true,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
      var route = response.routes[0];
      var summaryPanel = document.getElementById('directions_panel');
      summaryPanel.innerHTML = '';
      // For each route, display summary information.
      for (var i = 0; i < route.legs.length; i++) {
        var routeSegment = i + 1;
        summaryPanel.innerHTML += '<b>Place : ' + routeSegment + '</b><br>';
        summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
        summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
      }
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <div id="map-canvas" style="float:left;width:70%;height:100%;"></div>
    <div id="control_panel" style="float:right;width:30%;text-align:left;padding-top:20px">
    <div style="margin:20px;border-width:2px;">
    <b>Tour Plan Place:</b> <br>
    <i>(Ctrl-Click for multiple selection)</i> <br>
    <select multiple id="waypoints">
		<?php
			for($i=0;$i<$count-1;$i++){
				echo "<option>".$Address[$i]."</option>";
			}				
		?>
    </select>
    <br>
      <input type="submit" onclick="calcRoute();">
    </div>
    <div id="directions_panel" style="margin:20px;background-color:#FFEE77;"></div>
    </div>
</body>
</html>