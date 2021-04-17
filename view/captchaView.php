<?php

header("Content-type: text/html, charset=UTF-8");
include_once('../controller/functions.php');
$questions = get_random_question();
$images = get_random_image();
$imgtoshow = '../public/img/'.$images['LienImage'];
$img_id_shown = $images['IdImage']; 

?>
<!DOCTYPE html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Brand</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../public/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../public/css/checkboxxxx.css" type="text/css">
    <link rel="stylesheet" href="../public/css/modal.css" type="text/css">
    <link rel="shorcut icon" href="../public/img/favicon.ico">
    <style>
        td:hover {
            border: 2px solid white;
            width: 153px;
            height: 153px;
            cursor: pointer;
        }

        td.clicked {
            border: 2px solid blue;
            width: 153px;
            height: 153px !important;
        }

        #refresh {
            position: absolute;
            top: 450px;
            left: 565px;
        }
    
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

    </style>

</head>

<body>
    <div>
        <a href="#demo">Aide</a>
        <div id="demo" class="modal">
            <div class="modal_content">
                <h1>Essai</h1>
                <p>Bienvenue sur la fenêtre aide !</p>
                <a href="#" class="modal_close">&times;</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form method="post" action="../model/captchaModel.php" class="formulaire">
                    <input type="hidden" name="questionId" id="questionId">
                    <input type="hidden" name="imageId" id="imageId" value="<?= $img_id_shown ?>">
                    <input type="hidden" name="cellId" id="cellId">
                    <div class="col-md-6 col-lg-4 col-xl-6">
                        <div class="card border-0" id="essai">
                            <div class="card-body">
                                <h4>Questions</h4>
                                <div class="inputGroup">
                                    <?php
                                    //while ($return = $id_Qst->fetch()) {
                                        foreach ($questions as $questionObj){
                                        echo '
                                        <input type="radio" name="question" id="question' . $questionObj['IdQuestion'] . '" value="' . $questionObj['IdQuestion'] . '"  checked > 
                                        <label for="question"> ' . $questionObj['LibelleQuestion'] . ' </label> <br>
                                        ';
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" id="actionBtn" disabled>Valider</button>

                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-6">
                        <div class="card border-0">
                            <table width="465" cellspacing="0" cellpadding="0" height="465" >
                                <tr>
                                    <td id="1" class="i1" name="image-tag" value="TOP-LEFT" onClick="get(this.id);"></td>
                                    <td id="2" class="i2" name="image-tag" value="TOP-CENTER" onClick="get(this.id);"></td>
                                    <td id="3" class="i3" name="image-tag" value="TOP-LEFT" onClick="get(this.id);"></td>
                                </tr>
                                <tr>
                                    <td id="4" class="i4" name="image-tag" value="CENTER-LEFT" onClick="get(this.id);"></td>
                                    <td id="5" class="i5" name="image-tag" value="CENTER-CENTER" onClick="get(this.id);"></td>
                                    <td id="6" class="i6" name="image-tag" value="CENTER-RIGHT" onClick="get(this.id);"></td>
                                </tr>
                                <tr>
                                    <td id="7" class="i7" name="image-tag" value="BOTTOM-LEFT" onClick="get(this.id);"></td>
                                    <td id="8" class="i8" name="image-tag" value="BOTTOM-CENTER" onClick="get(this.id);"></td>
                                    <td id="9" class="i9" name="image-tag" value="BOTTOM-RIGHT" onClick="get(this.id);"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
                <!--<button type="submit" id="refresh" onclick="location.reload();">Raffraichir ou imageRaffraichir</button>-->
                <button type="submit" id="refresh" onclick="reloadImg();"><img src="../view/refresh.png" alt='imageRaffraichir' width="20px" height="22px"></button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="../vendor/js/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/js/chart.min.js"></script>
    <script src="../vendor/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../vendor/js/theme.js"></script>
    <script src="../public/js/scripts.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</body>

</html>