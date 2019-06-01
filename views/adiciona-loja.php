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

    // usa o metodo inserir para o objeto loja no banco de dados e retorna o ID
     $loja->inserir();

    // Redirecionar para pagina
    header('Location: lista-loja.php');


 include("rodape.php"); ?>
