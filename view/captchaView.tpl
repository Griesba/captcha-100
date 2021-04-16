<?php
    header("Content-type: text/html, charset=UTF-8");
    $question_selected=(isset($_POST['question']))?trim(nl2br(htmlspecialchars($_POST['question']))):'';
?>

<!DOCTYPE html>
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
    <link rel="stylesheet" href="../public/css/checkbox.css">
    <link rel="shorcut icon" href="../public/img/favicon.ico">
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="post" action="../model/captchaModel.php">
                <div class="col-md-6 col-lg-4 col-xl-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <h4>Questions</h4>
                            <div class="inputGroup">
                                <?php 
                                    foreach ($question as $key) {
                                        echo '
                                        <input type="radio" name="question" id="question" value="'.$key[0].'">
                                        <label for="Question1"> '.$key[0].' </label> <br>
                                        ';
                                    }
                                ?>    
                            </div>
                        </div>
                    </div>
                    <button type="submit">Valider</button>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-6">
                    <div class="card border-0">
                        <table width="465" border="0" cellspacing="0" cellpadding="0" height="465">
                            <tr>
                              <td id="i1" class="i1" value="TOP-LEFT"></td>
                              <td id="i2" class="i2" value="TOP-CENTER"></td>
                              <td id="i3" class="i3" value="TOP-LEFT"></td>
                            </tr>
                            <tr>
                              <td id="i4" class="i4" value="CENTER-LEFT"></td>
                              <td id="i5" class="i5" value="CENTER-CENTER"></td>
                              <td id="i6" class="i6" value="CENTER-RIGHT"></td>
                            </tr>
                            <tr>
                              <td id="i7" class="i7" value="BOTTOM-LEFT"></td>
                              <td id="i8" class="i8" value="BOTTOM-CENTER"></td>
                              <td id="i9" class="i9" value="BOTTOM-RIGHT"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="../vendor/js/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/js/chart.min.js"></script>
    <script src="../vendor/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../vendor/js/theme.js"></script>
    <script src="../public/js/divide_img.js"></script>
</body>

</html>