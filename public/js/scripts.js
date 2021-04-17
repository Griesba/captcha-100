    function reloadImg() {
        
        $.ajax({
            type:"POST",
            url:"../controller/captcha.php",
            data:{'case' :im},
            success: function(){
                //alert(id);
            }
        })
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

