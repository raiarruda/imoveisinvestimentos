<?php
  include("../models/conecta.php");

  $msg = false;  //avisar se deu erro

  if(isset($_FILES['arquivo'])){
   
    $img = $_FILES['arquivo']['name'];
    // $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    // $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
   
    $final = explode( ".", $_FILES['arquivo'] ["name"] );
    $extensao = strtolower( end( $final ) ); // o end só recebe variavel como paramentro, por isso, a quebra
    $novo_nome = md5(time()). "." . $extensao;
    $diretorio = "../imgs/"; //define o diretorio para onde enviaremos o arquivo
    $string =  $diretorio . $novo_nome;
   
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $string); //efetua o upload
   
    $sql_code = "INSERT INTO img_imovel (id, nome_arquivo, data) VALUES(null, '$novo_nome', NOW())";
   
    if(mysqli_query($conexao, $sql_code))
      $msg = "Arquivo enviado com sucesso!";
    else
      $msg = "Falha ao enviar arquivo.";

    echo $msg;
  }
