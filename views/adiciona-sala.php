<?php include("cabecalho.php"); ?>
<?php include("../models/salaDAO.php"); ?>

<?php


    $area = $_GET['area'];

    $mezzanino = $_GET['mezzanino'];

    $shopping = $_GET['shopping'];

    $pavimentacao = $_GET['pavimentacao'];

    $centrocomercial = $_GET['centrocomercial'];


if(insereSala($conexao, $area, $mezzanino, $shopping, $centrocomercial, $pavimentacao)){ ?>
    <p> A sala foi adicionada</p>
<?php
}else{
    $msg = msqli_error($conexao);
    ?>
    <p> Teve erro   <?= $msg ?>  </p>
<?php

}
?>

<?php include("rodape.php"); ?>
