<?php
	require "../inc/config.php";

 
	extract($_POST);
	
	
	if(isset($id)){
		$req = $bdd->prepare("UPDATE prenom SET sexe='$sexe' WHERE id='$id'");
		$req->execute();
	}
	
	die($id);
?>