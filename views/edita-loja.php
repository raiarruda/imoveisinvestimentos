<?php require_once '../models/Loja.php' ?>

<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $loja = new Loja($id);
    $loja->titulo = "teste editar";
    $loja->editar();
    header('Location: lista-loja.php');
