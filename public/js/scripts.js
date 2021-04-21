
    function reloadImg() {
       
        $.ajax({
            type:"POST",
            url:"controller.php",
            data:{action: 'getNewImage', 'imageId' : $('#imageId').val()},
            dataType: 'text',
            success: function(result, status){

            },
            error: function (resultat, status,error) {
                console.log('error');
            }, 
            complete: function(result){
                var response = result.response.replace(/\r/g, "").split(/\n/).slice(1).join('');
                var jsonResponse = JSON.parse(response);
                $('#imageId').val(jsonResponse.IdImage);
                console.log(jsonResponse);
                for (let index = 1; index < 10; index++) {
                    document.getElementById(index).style.backgroundImage = "url('../public/img/"+ jsonResponse.LienImage +"')";
                }
            }
        });

    }

    var questionId;
        
    function get(cellId) {
         
        $('#actionBtn').removeAttr('disabled');

        $('#cellId').val(cellId);
        
        var que = document.getElementsByName('question');
          
        for(i = 0; i < que.length; i++) {                
            if(que[i].checked) {
                $('#questionId').val(que[i].value);
            }
        }
        console.log('question->' + $('#questionId').val());
        console.log('cellId->' + $('#cellId').val());
        console.log('imageId->'  + $('#imageId').val());
    }

    /*function updateImage() {
        <?php $newImgage = get_new_image($img_id_shown); ?>;
        var imgUrl = <?= $newImgage['LienImage'] ?>;
        console.log(imgUrl);
    }*/

function checkResponse () {
    console.log('cellid ->' + $('#cellId').val());
    console.log('imageId ->' + $('#imageId').val());
    console.log('quesitonId ->' + $('#questionId').val());

    $('#responseMsg').hide();
    $('#failedResponseMsg').hide();
    $('#jsonRespons').hide();

    $.ajax({
        type:"post",
        url:"controller.php",
        data:{action: 'validation', 'imageId' : $('#imageId').val(), cellId: $('#cellId').val(), questionId: $('#questionId').val()},
        dataType: 'json',
        success: function(result, status){

        },
        error: function (resultat, status,error) {
            console.log('error');
        }, 
        complete: function(result){
           
            console.log(result);

            var response = result.response.replace(/\r/g, "").split(/\n/).slice(1).join('');
           
            var jsonResponse = JSON.parse(response);

            $('#jsonRespons').text(JSON.stringify(jsonResponse, undefined, 1));
            $('#jsonRespons').show();


            console.log(jsonResponse);

            var newImage = jsonResponse.newImage;
            $('#imageId').val(newImage.IdImage);           
            
            
            for (let index = 1; index < 10; index++) {
                document.getElementById(index).style.backgroundImage = "url('../public/img/"+ newImage.LienImage +"')";
            }

            $('#questionsGroup').empty();
            var newContent = '';
            for (let index = 0; index < 5; index++) {
                var questionId = jsonResponse.questions[index].IdQuestion;
                var LibelleQuestion = jsonResponse.questions[index].LibelleQuestion;
                var text = '<input type="radio" name="question" id="question' + questionId + '" value="' + questionId + '"  checked > ' +
                '<label for="question' + questionId + '"> ' + LibelleQuestion + ' </label> <br>';
                newContent += text;
            }

            $('#questionsGroup').append(newContent);

            if(!!jsonResponse.valid) {
                $('#affichageSucces').show();
                $('#affichageEchec').hide();
            } else {
                $('#affichageEchec').show();
                $('#affichageSucces').hide();
            }
            

            if(jsonResponse.count > 1) {
                $('#responseMsg').show();
                window.location.href = '#';
            } else if(jsonResponse.total > 1) {
                $('#failedResponseMsg').show();
                window.location.href = '#';
            }

            
        }
    });

}

