<?php include("cabecalho.php"); ?>
<?php include("../models/salaDAO.php"); ?>

<h1>Lista Salas</h1>
<?php
    
    $salas = listaSalas($conexao);
    
    foreach($salas as $sala){
        echo "{$sala['id']}     {$sala['area']}" . "<br/>";
    }

?>
<?php include("rodape.php"); ?>
