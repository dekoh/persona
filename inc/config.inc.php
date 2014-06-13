<?php
	$hostname = "localhost";

	$userdb = "root";

	$passdb = "root";

	$nomdb = "persona";

	try{
		$bdd = new PDO("mysql:host=$hostname;dbname=$nomdb", $userdb, $passdb);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e) {
		echo "error : ".$e->getMessage();
	}

?>