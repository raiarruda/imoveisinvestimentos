
<h1>Upload de  oi  Arquivos</h1>
<!-- if(isset($msg) && $msg != false) echo "<p> $msg </p>";  -->
<!-- <form action="upload.php" method="POST" enctype="multipart/form-data" >
  Arquivo: <input type="file" required name="files[]" multiple>
  <input type="submit" name='submit' value="Salvar">
  
</form> -->


<!-- images upload form -->
<form method="post" id="uploadForm" enctype="multipart/form-data" action="upload.php">
    <label>Choose Images</label>
    <input type="file" name="images[]" id="images" multiple >
    <input type="submit" name="submit" value="UPLOAD"/>
</form>

<!-- display upload status -->
<div id="uploadStatus"></div>

<!-- gallery view of uploaded images --> 
<div class="gallery" id="imagesPreview"></div>



<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

<script>
$(document).ready(function(){
    $('#uploadForm').ajaxForm({
        target:'#imagesPreview',
        beforeSubmit:function(){
            $('#uploadStatus').html('<img src="uploading.gif"/>');
        },
        success:function(){
            $('#images').val('');
            $('#uploadStatus').html('');
        },
        error:function(){
            $('#uploadStatus').html('Images upload failed, please try again.');
        }
    });
});
</script>
