<?php

    $db_host = "mysql:host=sql9.freemysqlhosting.net;dbname=sql9604955";
    $db_user = "sql9604955";
    $db_pass = "hXgfF5mzzg"; 
    $database = 'sql9604955'; 
    $host = 'sql9.freemysqlhosting.net';

    $mysqli = new mysqli($host, $db_user, $db_pass, $database);

    if ($mysqli->connect_error) {
        die('Connect Error (' .
        $mysqli->connect_errno . ') '.
        $mysqli->connect_error);
    }
    
	try {
		$db = new PDO($db_host, $db_user, $db_pass);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		print($error_message);
		
		exit();
	}

?>