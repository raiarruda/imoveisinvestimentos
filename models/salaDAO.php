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
        $query = "INSERT INTO loja (titulo, area, mezzanino, shopping, centrocomercial, pavimentacao) VALUES ('{$titulo}','{$area}', '{$mezzanino}', '{$shopping}', '{$centrocomercial}', '{$pavimentacao}')";
        return mysqli_query($conexao,  $query);
    }


    function removeLoja($conexao, $id) {
        $query = "delete from loja where id = {$id}";
        return mysqli_query($conexao, $query);
    }

    

    // function busca
