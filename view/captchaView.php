<?php

header("Content-type: text/html, charset=UTF-8");
$question_selected = (isset($_POST['question'])) ? trim(nl2br(htmlspecialchars($_POST['question']))) : '';
$id_Qst = $db->query('SELECT * FROM question order by rand() Limit 5');

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
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            document.addEventListener('click', function(e) {
                console.log(e);
                if (e.target && e.target.id == '1') {
                    console.log('ásdfas');
                }
            });



            function tes(event) {
                if (event.target.nodeName == "TD") {
                    event.target.classList.toggle("Clicked")
                }
            }

            function get(id) {
                $('.formulaire').submit(function() {
                    var im = id;
                    $.ajax({
                        type: "POST",
                        url: "../controller/captcha.php",
                        data: {
                            'case': im
                        },
                        success: function() {
                            //alert(id);
                        }
                    })
                });
            }


        });
    </script>


</head>

<body>
    <div>


        <div class="container">
            <div class="row">
                <form method="post" action="../model/captchaModel.php" class="formulaire">
                    <div class="col-md-6 col-lg-4 col-xl-6">
                        <div class=" border-0" id="essai">
                            <div class="">
                                <h4>Questions</h4>
                                <div class="inputGroup">
                                    <?php
                                    while ($return = $id_Qst->fetch()) {
                                        //foreach ($question as $key){
                                        echo '
                                        <input type="radio" name="question" id="question" value="' . $return['IdQuestion'] . '"> 
                                        <label for="question"> ' . $return['LibelleQuestion'] . ' </label> <br>
                                        ';
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--<button type="submit" name ="submit" >Valider</button> -->

                    </div>
                </form>
                <div class="col-md-6 col-lg-4 col-xl-6">
                    <div class=" border-0">
                        <table style="bottom: 0px; left: 0px" width="465" cellspacing="0" cellpadding="0" height="465" onClick="tes(event);">
                            <tr>
                                <td id="1" class="i1" value="TOP-LEFT" onClick="get(this.id);"></td>
                                <td id="2" class="i2" value="TOP-CENTER" onClick="get(this.id);"></td>
                                <td id="3" class="i3" value="TOP-LEFT" onClick="get(this.id);"></td>
                            </tr>
                            <tr>
                                <td id="4" class="i4" value="CENTER-LEFT" onClick="get(this.id);"></td>
                                <td id="5" class="i5" value="CENTER-CENTER" onClick="get(this.id);"></td>
                                <td id="6" class="i6" value="CENTER-RIGHT" onClick="get(this.id);"></td>
                            </tr>
                            <tr>
                                <td id="7" class="i7" value="BOTTOM-LEFT" onClick="get(this.id);"></td>
                                <td id="8" class="i8" value="BOTTOM-CENTER" onClick="get(this.id);"></td>
                                <td id="9" class="i9" value="BOTTOM-RIGHT" onClick="get(this.id);"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--<button type="submit" id="refresh" onclick="location.reload();">Raffraichir ou imageRaffraichir</button>-->
                <!--<button type="submit" id="refresh" onclick="location.reload();"><img src ="../view/refresh.png" alt ='imageRaffraichir' width = "20px" height ="22px"></button> -->
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
    <script src="../public/js/divide_img.js"></script>
</body>

</html>