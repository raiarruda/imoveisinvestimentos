<?php
  
  include("../models/conecta.php");



  if(isset($_POST['submit'])){
      // File upload configuration
      $targetDir = "../imgs/";
      $allowTypes = array('jpg','png','jpeg','gif');
      $loja_id = $_POST['loja_id'];
     
      $images_arr = array();
      foreach($_FILES['images']['name'] as $key=>$val){
        
          $image_name = $_FILES['images']['name'][$key];
          $tmp_name   = $_FILES['images']['tmp_name'][$key];
          $size       = $_FILES['images']['size'][$key];
          $type       = $_FILES['images']['type'][$key];
          $error      = $_FILES['images']['error'][$key];
          
        
          
          // File upload path
          $final = explode( ".", $_FILES['images'] ["name"][$key] );
          $extensao = strtolower( end( $final ) ); // o end só recebe variavel como paramentro, por isso, a quebra
          $fileName  = md5(time()). "." . $extensao;
          // $fileName = basename($_FILES['images']['name'][$key]);
          $targetFilePath = $targetDir . $fileName;
          
          // Check whether file type is valid
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

          if(in_array($fileType, $allowTypes)){    
              $sql_code = "INSERT INTO img_imovel (imovel_id, nome_arquivo, data) VALUES( '$loja_id', '$targetFilePath', NOW())";
              
              if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)  &&  mysqli_query($conexao, $sql_code) ) // garante que o upload seja feito apenas quando salvar no banco
                $msg = "Arquivo enviado com sucesso! <br>";
              else
                  $msg = "Falha ao enviar arquivo.";

              echo $msg;
              
              $images_arr[] = $targetFilePath;
              }
          }
      }
      
      // Generate gallery view of the images
      if(!empty($images_arr)){ ?>
          <ul>
          <?php foreach($images_arr as $image_src){ ?>
              <li><img src="<?php echo $image_src; ?>" alt=""></li>
          <?php } ?>
          </ul>
  <?php }
  
// if(isset($_FILES['arquivo'])){
  //   $img = $_FILES['arquivo']['name'];
  //   // $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
  //   // $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
   
  //   $final = explode( ".", $_FILES['arquivo'] ["name"] );
  //   $extensao = strtolower( end( $final ) ); // o end só recebe variavel como paramentro, por isso, a quebra
  //   $novo_nome = md5(time()). "." . $extensao;
  //   $diretorio = "../imgs/"; //define o diretorio para onde enviaremos o arquivo
  //   $string =  $diretorio . $novo_nome;
   
  //   move_uploaded_file($_FILES['arquivo']['tmp_name'], $string); //efetua o upload
   
  //   $sql_code = "INSERT INTO img_imovel (id, nome_arquivo, data) VALUES(null, '$novo_nome', NOW())";
   
  //   if(mysqli_query($conexao, $sql_code))
  //     $msg = "Arquivo enviado com sucesso!";
  //   else
  //     $msg = "Falha ao enviar arquivo.";

  //   echo $msg;
  // }
?>
  
