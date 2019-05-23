<?php include("cabecalho.php"); ?>
<?php include("../models/lojaDAO.php"); ?>

<?php


    $titulo = $_POST['titulo'];

    $area = $_POST['area'];

    $mezzanino = $_POST['mezzanino'];

    $shopping = $_POST['shopping'];

    $pavimentacao = $_POST['pavimentacao'];

    $centrocomercial = $_POST['centrocomercial'];


if(insereLoja($conexao, $titulo, $area, $mezzanino, $shopping, $centrocomercial, $pavimentacao)){ ?>
    <p> A Loja foi adicionada</p>
<?php
}else{
    $msg = msqli_error($conexao);
    ?>
    <p> Teve erro   <?= $msg ?>  </p>
<?php

}
?>

<?php include("rodape.php"); ?>
