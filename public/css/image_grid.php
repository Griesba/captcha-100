<?php

if(!defined("okcss")){
        header('HTTP/2.0 403 Forbidden', TRUE, 403);

        die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>This file has been protected</h1></body></html>');
} else {
		header("Content-type: text/css, charset=UTF-8");
		$repository_image = "../public/img/";
		foreach ($image as $key) {
			$imgtoshow = "../public/img/".$key[0];

    }
}

?>

<style>
    
	.i1 { background: url(<?php echo $imgtoshow ?>) no-repeat left top; }
	.i2 { background: url(<?php echo $imgtoshow ?>) no-repeat center top; }
	.i3 { background: url(<?php echo $imgtoshow ?>) no-repeat right top; }
	.i4 { background: url(<?php echo $imgtoshow ?>) no-repeat left center; }
	.i5 { background: url(<?php echo $imgtoshow ?>) no-repeat center center; }
	.i6 { background: url(<?php echo $imgtoshow ?>) no-repeat right center; }
	.i7 { background: url(<?php echo $imgtoshow ?>) no-repeat left bottom; }
	.i8 { background: url(<?php echo $imgtoshow ?>) no-repeat center bottom; }
	.i9 { background: url(<?php echo $imgtoshow ?>) no-repeat right bottom; }
    .td { width: 150px; height: 150px; }
</style>
