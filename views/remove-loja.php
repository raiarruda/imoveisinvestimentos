<?php 
    include("cabecalho.php");
    include("../models/lojaDAO.php");

    $id = $_GET['id'];
    removeLoja($conexao, $id);
    header("Location:lista-loja.php?removido=true");
    die();

    ?>

<?php
    include("rodape.php");
?>