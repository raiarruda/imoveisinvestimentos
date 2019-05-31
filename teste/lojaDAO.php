<?php include("conecta.php"); 
    function listaLojas($conexao){
        $lojas = array();
        $resultado = mysqli_query($conexao, "select * from loja");
        while( $loja = mysqli_fetch_assoc($resultado)){
        
        array_push($lojas, $loja);
        

        }
        return $lojas;
    }

    function insereLoja($conexao, $titulo, $area, $tem_mezzanino,  $shopping, $tipo_de_rua, $centro_comercial, $frente_rua){

        $imovel_id = insereImovel($conexao,$titulo);
        $query = "INSERT INTO loja (imovel_id, area,tem_mezzanino, shopping, centro_comercial, tipo_de_rua, frente_rua) 
            VALUES ('{$imovel_id}','{$area}', '{$tem_mezzanino}', '{$shopping}', '{$centro_comercial}', '{$tipo_de_rua}', '{$frente_rua}')";
    
        return mysqli_query($conexao,  $query);
    }


    function insereImovel($conexao, $titulo){
        $query = "INSERT INTO `imovel` (`titulo`) VALUES ('{$titulo}')";
        if( mysqli_query($conexao, $query)){
            $imovel_id = mysqli_insert_id($conexao);
            return $imovel_id;
        }
        else{
            return false;
        }
            

    }
    
    function removeLoja($conexao, $id) {
        $query = "delete from loja where id = {$id}";
        return mysqli_query($conexao, $query);
    }
    // function busca
    if(insereLoja($conexao, $titulo, $area, $tem_mezzanino,  $shopping, $tipo_de_rua, $centro_comercial, $frente_rua)){ 
        $loja_id = mysqli_insert_id($conexao);
        ?>
        <!-- images upload form -->
        <!-- TODO mexer no forma para envio de arquivos  -->
        <form method="post" id="uploadForm" enctype="multipart/form-data" action="upload.php">
            <label>Choose Images</label>
            <input type="file" name="images[]" id="images" multiple >
            <input type="number" name="loja_id" value="<?=$loja_id?>" hidden >
            <input type="submit" name="submit" value="UPLOAD"/>
        </form>
    
        <!-- display upload status -->
        <div id="uploadStatus"></div>
    
        <!-- gallery view of uploaded images --> 
        <div class="gallery" id="imagesPreview"></div>
    <?php
    }else{
        echo ("Deu erro!");
    
    }
    ?>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    
    <script>
    $(document).ready(function(){
        $('#uploadForm').ajaxForm({
            target:'#imagesPreview',
            beforeSubmit:function(){
                $('#uploadStatus').html('<img src="uploading.gif"/>');
            },
            success:function(){
                $('#images').val('');
                $('#uploadStatus').html('');
            },
            error:function(){
                $('#uploadStatus').html('Images upload failed, please try again.');
            }
        });
    });
    </script>