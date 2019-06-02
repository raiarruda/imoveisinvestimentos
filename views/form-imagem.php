
<?php require_once("cabecalho.php");
    require_once("../models/Loja.php");
    
    $id =  $_GET['id'];
    $loja = new Loja($id);
    
    $lojaCarregada = $loja->carregar();
    echo $id;

?>
<form method="post" id="uploadForm" enctype="multipart/form-data" action="upload.php">
            <label>Choose Images</label>
            <input type="file" name="images[]" id="images" multiple >
            <input type="number" name="loja_id" value="<?=$id?>" hidden >
            <input type="submit" name="submit" value="UPLOAD"/>
        </form>
    
        <!-- display upload status -->
        <div id="uploadStatus"></div>
    
        <!-- gallery view of uploaded images --> 
        <div class="gallery" id="imagesPreview"></div>

    
    
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