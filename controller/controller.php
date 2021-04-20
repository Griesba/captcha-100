<?php 

include_once('functions.php');

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$action = $_POST['action'];

header('Content-Type: application/json');

if(isset($action)){
    switch($action) {
        case 'getNewImage':
               if(isset($_POST['imageId'])) {
                echo getNewImage($_POST['imageId']);
               } else {
                echo json_encode( array('error' => 'imageId is required'));
               }
            break;
        case 'validation':
            if(isset($_POST['imageId']) && isset($_POST['cellId']) && isset($_POST['questionId'])) {
                echo validation($_POST['imageId'], $_POST['cellId'], $_POST['questionId']);
            } else {
                echo json_encode( array('error' => 'invalid action: validation'));
            }

            break;
        default: 
         echo json_encode( array('error' => 'unknown action'));
    }
}


function getNewImage ($old_img_id) {
    
        $image = get_new_image($old_img_id);

        return json_encode($image);
}


function validation($old_img_id, $id_cell, $id_question) {

    save_selection ($old_img_id, $id_question, $id_cell);

    $count = 0;
    $total = 0;

    if( isset( $_SESSION['total'] ) ) {
        $_SESSION['total'] += 1;
     }else {
        $_SESSION['total'] = 1;
     }
     $total = $_SESSION['total'];


    if(is_valid($id_cell, $id_question)) {
        
        if( isset( $_SESSION['count'] ) ) {
            $_SESSION['count'] += 1;
         }else {
            $_SESSION['count'] = 1;
         }
         
        $count = $_SESSION['count'];
        if($count > 1) {
            $count = 0;
            $_SESSION['count'] = 0;
        }
        
        echo json_encode(array(
            'valid' => true,
            'count' => $count,
            'total' => $total,
            'newImage' => get_new_image($old_img_id),
            'questions' => get_random_question()
        ));

    } else {
        $_SESSION['count'] = 0;
        echo json_encode(array(
            'valid' => false,
            'count' => $count,
            'total' => $total,
            'newImage' => get_new_image ($old_img_id),
            'questions' => get_random_question()
        ));
    }

    if($_SESSION['count'] > 1 || $_SESSION['total'] > 1) {
        unset($_SESSION['count']);
        unset($_SESSION['total']);
    }
}
