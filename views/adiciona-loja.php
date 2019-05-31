<?php require_once("cabecalho.php"); ?>
<?php require_once("../models/Loja.php"); ?>

<?php
    // cria um objeto loja
    $loja=new Loja();
    
    // pega as informacoes do post/formulario

    $titulo = $_POST['titulo'];
    $area = $_POST['area'];
    $descricao = $_POST['descricao'];
    $localizacao = $_POST['localizacao'];
    array_key_exists('tem_mezzanino', $_POST) ? $tem_mezzanino = "1":  $tem_mezzanino = "0";
    array_key_exists('shopping', $_POST) ? $shopping = "1":  $shopping = "0";
    array_key_exists('tipo_de_rua', $_POST) ? $tipo_de_rua = "1":  $tipo_de_rua = "0";
    array_key_exists('centro_comercial', $_POST)? $centro_comercial = "1": $centro_comercial = "0";
    array_key_exists('frente_rua', $_POST)? $frente_rua = "1": $frente_rua = "0";
    
    // atribui as informacoes para o objeto loja
    $loja->titulo = $titulo;
    $loja->area = $area;
    $loja->descricao = $descricao;
    $loja->localizacao = $localizacao;
    $loja->tem_mezzanino = $tem_mezzanino;
    $loja->shopping = $shopping;
    $loja->tipo_de_rua = $tipo_de_rua;
    $loja->centro_comercial = $centro_comercial;
    $loja->frente_rua = $frente_rua;

    // usa o metodo inserir para o objeto loja
    $loja->inserir();


    header('Location: lista-loja.php');

    

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
