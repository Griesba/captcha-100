<!--Fichier header-->
<?php
if(!defined("okdb")){
        header('HTTP/2.0 403 Forbidden', TRUE, 403);

        die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>This file has been protected</h1></body></html>');
}
function connect($host,$dbname,$charset,$user,$password) { 
    try
    {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", "$user", "$password", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    if (!$db) {   
        echo 'Erreur lors de la connexion à la base de données';
    }
    return $db; 
}
$db = connect('localhost','captcha','utf8','root','');
