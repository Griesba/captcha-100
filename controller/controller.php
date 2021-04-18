<?php 

include_once('functions.php');

$action = $_POST['action'];

if(isset($action) && $action == 'getNewImage' && isset($_POST['imageId'])) {
    header('Content-Type: application/json');
    echo getNewImage( isset($_POST['imageId']));
} 

function getNewImage ($old_img_id) {
    
        $image = get_new_image($old_img_id);

        return json_encode($image, JSON_PRETTY_PRINT);
}

