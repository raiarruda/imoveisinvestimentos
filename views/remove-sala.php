<?php 
    include("cabecalho.php");
    include("../models/salaDAO.php");

    $id = $_GET['id'];
    removeSala($conexao, $id);
    header("Location:lista-sala.php?removido=true");
    die();

    ?>

<?php
    include("rodape.php");
?>