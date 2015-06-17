<?php
    
    $server 	= 'localhost:3306';
	$username 	= 'root';
	$password 	= '';
	$database	= 'vacationer';
	$dsn 		= "mysql:host=$server;dbname=$database";
    
    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
        $sth = $db->query("SELECT * FROM user");
        $driver = $sth->fetchAll();
        
        echo json_encode( $driver );
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>