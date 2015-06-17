<?php
		session_start();
		include('DBConnection.php');
		//$_SESSION['lat']=6.984722;
		//$_SESSION['lng']=80.0563 ;
		//$_SESSION['lat']=$_REQUEST[lat] ;
		//$_SESSION['lng']=$_REQUEST[lng] ;
// Haversine formula
function Haversine($start, $finish) {
	
	$theta = $start[1] - $finish[1]; 
	$distance = (sin(deg2rad($start[0])) * sin(deg2rad($finish[0]))) + (cos(deg2rad($start[0])) * cos(deg2rad($finish[0])) * cos(deg2rad($theta))); 
	$distance = acos($distance); 
	$distance = rad2deg($distance); 
	$distance = $distance * 60 * 1.1515; 
	
	return round($distance, 2);

}

// Get lat/long co-ords
function getLatLong($address) {
		
	$address = str_replace(' ', '+', $address);
	$url = 'http://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&sensor=false';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$geoloc = curl_exec($ch);
	
	$json = json_decode($geoloc);
	return array($json->results[0]->geometry->location->lat, $json->results[0]->geometry->location->lng);
	
}
?>
<!doctype html>
<html>
<head>
<title>Getting the distance between two locations</title>
</head>
<body>

	<h1>Getting the distance between two locations</h1>

	<?php
	//var one = new google.maps.LatLng(6.984722, 81.0563);
	//var center = new google.maps.LatLng(6.984722, 81.0563);
	//$start = getLatLong(center);
	//$finish = getLatLong('BH15 2BT');
	$x=1;
	$placeLat[0]=$_SESSION['lat'];
	$placeLng[0]=$_SESSION['lng'];
	
	
	$result = mysql_query("SELECT * FROM tourplan");
	while($row = mysql_fetch_array($result)){
		$placeLat[$x]=$row['lat'];
		$placeLng[$x]=$row['lng'];
		$x++;
	}
	$count=mysql_num_rows($result);
	
	/*$start = array($_SESSION['lat'], $_SESSION['lng']);
	$finish = array(6.984722, 82.0563);
	$distance = Haversine($start, $finish);
	print($distance * 1.609344);*/
	echo "<table align=center border='1'>";	
	
	$loc=0;
	
		for($i=0;$i<=$count;$i++){
		
		$dis_temp=1000000;
		
				for($j=0;$j<=$count;$j++){
				if($placeLat[$j]!=0 && $placeLng[$j]!=0){
					$start = array($placeLat[$loc], $placeLng[$loc]);
					$finish = array($placeLat[$j], $placeLng[$j]);
					$distrance_arr[$j]=Haversine($start, $finish);
					}else{
						$distrance_arr[$j]=0;
					}
						}
						
					$placeLat[$loc]=0;
					$placeLng[$loc]=0;
					
					echo "<tr>";	
					
					
				for($j=0;$j<=$count;$j++){
					echo "<td>";
					echo $distrance_arr[$j]* 1.609344;
					echo "</td>";
					
					if($distrance_arr[$j]!=0 && $distrance_arr[$j]<$dis_temp ){
							$dis_temp=$distrance_arr[$j];
							$loc=$j;
							}	
						}
				
					echo "<td>";
					echo $loc;
					echo "</td></tr>";
					
					$sql_create_table="CREATE TABLE IF NOT EXISTS temp_plan (ID INT NOT NULL AUTO_INCREMENT,  lat varchar(50), lng varchar(50), PRIMARY KEY (ID))";
			   
					$create = mysql_query($sql_create_table);
					
					if(!$create)
					{
						die('<h2>use other username</h2> '. mysql_error());
					}
					
					$insert="INSERT INTO temp_plan (lat, lng)
					VALUES
					('$placeLat[$loc]', '$placeLng[$loc]')";
					
					$add_member = mysql_query($insert);
					
					if(!$add_member)
					{
						die('<h2>use other username</h2> '. mysql_error());
					}else{
						header("location: multipath.php");
					}
					
			
			}
		echo "</table>";
	
	/*for($i=1;$i<=$count;$i++){
		if($distrance_arr[$i]<$dis_temp){
			$dis_temp=$distrance_arr[$i];
			$loc=$i+1;
		}
	}*/
	
	/*echo "<table align=center border='1'>";
	for($i=0;$i<=$count;$i++){
		echo "<tr><td>";
		echo $placeLat[$i];
		echo "</td><td>";
		echo $distrance_arr[$i]* 1.609344;
		echo "</td></tr>";
		}
		echo $dis_temp* 1.609344;
		echo $loc;
	echo "</table>";*/
	?>
	
</body>
</html>