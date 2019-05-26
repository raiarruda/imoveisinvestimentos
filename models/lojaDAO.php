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
