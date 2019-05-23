<?php include("cabecalho.php"); ?>
<?php include("../models/lojaDAO.php"); ?>

<?php


    $titulo = $_POST['titulo'];

    $area = $_POST['area'];

    $mezzanino = $_POST['mezzanino'];

    $shopping = $_POST['shopping'];

    $pavimentacao = $_POST['pavimentacao'];

    $centrocomercial = $_POST['centrocomercial'];


if(insereLoja($conexao, $titulo, $area, $mezzanino,  $shopping, $pavimentacao, $centrocomercial)){ ?>
    <p> A Loja foi adicionada</p>
<?php
}else{
    echo ("deu ruim");

}
?>

<?php include("rodape.php"); ?>
