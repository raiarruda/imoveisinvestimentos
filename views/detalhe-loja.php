<?php

    require_once("cabecalho.php");
    require_once("../models/Loja.php");

    $loja = new Loja();
    $id =  $_GET['id'];
    $loja->id = $id;
    $loja->carregar();

    echo $loja->titulo;

    require_once("rodape.php");



?>