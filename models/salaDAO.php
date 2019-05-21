<?php include("conecta.php"); 
    function listaSalas($conexao){
        $salas = array();
        $resultado = mysqli_query($conexao, "select * from sala");
        while( $sala = mysqli_fetch_assoc($resultado)){
        
        array_push($salas, $sala);
        

        }
        return $salas;
    }



    function insereSala($conexao, $titulo, $area, $mezzanino, $shopping, $centrocomercial, $pavimentacao){
        $query = "INSERT INTO sala (titulo, area, mezzanino, shopping, centrocomercial, pavimentacao) VALUES ('{$titulo}','{$area}', '{$mezzanino}', '{$shopping}', '{$centrocomercial}', '{$pavimentacao}')";
        return mysqli_query($conexao,  $query);
    }


    function removeSala($conexao, $id) {
        $query = "delete from sala where id = {$id}";
        return mysqli_query($conexao, $query);
    }


