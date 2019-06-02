<?php

    require_once("cabecalho.php");
    require_once("../models/Loja.php");

    
    $id =  $_GET['id'];
    $loja = new Loja($id);
    
    $lojaCarregada = $loja->carregar();

    $fotos = $loja->fotos();
?>
    <h1> <?=$lojaCarregada['titulo'];?> </h1>
    <h1> <?=$lojaCarregada['area'];?> </h1>
    <h1> <?=$lojaCarregada['tem_mezzanino'];?> </h1>
    <h1> <?=$lojaCarregada['shopping'];?> </h1>
    <h1> <?=$lojaCarregada['tipo_de_rua'];?> </h1>
    <?php  foreach ($fotos as $foto): ?>
    <img src="<?=$foto['nome_arquivo']?>" >
    <?php endforeach ?>
<?php

    

    require_once("rodape.php");



?>