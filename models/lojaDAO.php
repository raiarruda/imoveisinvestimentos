<?php include("conecta.php"); 
    function listaLojas($conexao){
        $lojas = array();
        $resultado = mysqli_query($conexao, "select * from loja");
        while( $loja = mysqli_fetch_assoc($resultado)){
        
        array_push($lojas, $loja);
        

        }
        return $lojas;
    }

    function insereLoja($conexao, $titulo, $area, $mezzanino, $shopping, $centrocomercial, $pavimentacao){
        $imovel_id = insereImovel($conexao,$titulo);

        $query = "INSERT INTO loja (imovel_id, area, mezzanino, shopping, centrocomercial, pavimentacao) VALUES ('{$imovel_id}',{$area}', '{$mezzanino}', '{$shopping}', '{$centrocomercial}', '{$pavimentacao}')";
        return mysqli_query($conexao,  $query);
    }


    function removeLoja($conexao, $id) {
        $query = "delete from loja where id = {$id}";
        return mysqli_query($conexao, $query);
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
    // function busca
