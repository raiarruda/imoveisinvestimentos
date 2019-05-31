<?php require_once("cabecalho.php"); ?>
<?php require_once("../models/lojaDAO.php"); ?>

<?php


    $titulo = $_POST['titulo'];

    $area = $_POST['area'];
  
    if(array_key_exists('tem_mezzanino', $_POST)) {
        $tem_mezzanino = "true";
    } else {
        $tem_mezzanino = "false";
    }

    if(array_key_exists('shopping', $_POST)) {
        $shopping = "true";
    } else {
        $shopping = "false";
    }
    if(array_key_exists('tipo_de_rua', $_POST)) {
        $tipo_de_rua = "true";
    } else {
        $tipo_de_rua = "false";
    }

    if(array_key_exists('centro_comercial', $_POST)) {
        $centro_comercial = "true";
    } else {
        $centro_comercial = "false";
    }

    if(array_key_exists('frente_rua', $_POST)) {
        $frente_rua = "true";
    } else {
        $frente_rua = "false";
    }
    

if(insereLoja($conexao, $titulo, $area, $tem_mezzanino,  $shopping, $tipo_de_rua, $centro_comercial, $frente_rua)){ 
    $loja_id = mysqli_insert_id($conexao);
    ?>
    <!-- images upload form -->
    <!-- TODO mexer no forma para envio de arquivos  -->
    <form method="post" id="uploadForm" enctype="multipart/form-data" action="upload.php">
        <label>Choose Images</label>
        <input type="file" name="images[]" id="images" multiple >
        <input type="number" name="loja_id" value="<?=$loja_id?>" hidden >
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>

    <!-- display upload status -->
    <div id="uploadStatus"></div>

    <!-- gallery view of uploaded images --> 
    <div class="gallery" id="imagesPreview"></div>
<?php
}else{
    echo ("Deu erro!");

}
?>

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

<?php include("rodape.php"); ?>
