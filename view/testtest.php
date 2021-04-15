<?php

	session_start();

	if(!empty($_POST['question'])){

		//connexion base faite dans debut.php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=captcha', 'root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        }	

		catch (Exception $e){
        	// En cas d'erreur, on affiche un message et on arrête tout
        	die ('Erreur : '.$e->getMessage());
    	}

			$radio = $_POST['Question'];

			$req = "INSERT INTO test(compteur) VALUES ('$radio')";
			$donnees = $bdd->query($req);
	}

	else{
		echo'Vous n\'avez pas sélectionné de question !';
	}

