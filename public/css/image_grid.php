<?php

if(!defined("okcss")){
        header('HTTP/2.0 403 Forbidden', TRUE, 403);

        die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>This file has been protected</h1></body></html>');
} else {
		header("Content-type: text/css, charset=UTF-8");
		$repository_image = "../public/img/";
/* 		foreach ($image as $key) {
			$imgtoshow = "../public/img/".$key[1];
			$id_img_shown = $key[0];
    	} */
}

?>


