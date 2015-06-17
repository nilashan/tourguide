<?php
    
    $server 	= 'localhost:3306';
	$username 	= 'root';
	$password 	= '';
	$database	= 'taxi';
	$dsn 		= "mysql:host=$server;dbname=$database";
    
    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
        $sth = $db->query("SELECT driver.*,vehicle.* FROM driver,vehicle WHERE driver.vehicle_reg_no=vehicle.vehicle_reg_no AND vehicle.state like '%yes%';");
        $driver = $sth->fetchAll();
        
        echo json_encode( $driver );
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>