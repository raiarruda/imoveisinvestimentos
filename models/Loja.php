<?php
require_once('Conexao.php');

class Loja{

    public $id;
    public $titulo;
    public $tem_mezzanino;
    public $shopping;
    public $frente_rua;
    public $centro_comercial;
    public $area;
    public $descricao;
    public $localizacao;
    

    public function listar(){
        
        $query = "SELECT* FROM loja";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
        
    }

    public function inserir(){
      
        $query = "INSERT INTO loja (titulo, area,tem_mezzanino, shopping, centro_comercial, tipo_de_rua, frente_rua, descricao, localizacao) 
                    VALUES ('{$this->titulo}','{$this->area}', '{$this->tem_mezzanino}', '{$this->shopping}', '{$this->centro_comercial}', '{$this->tipo_de_rua}',
                     '{$this->frente_rua}','{$this->descricao}', '{$this->localizacao}')";                     
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
        // if( mysqli_query($conexao, $query)){
        //     $imovel_id = mysqli_insert_id($conexao);
        //     return $imovel_id;
        // }
        // else{
        //     return false;
        // }
    }

    public function deletar(){
        $query = "DELETE FROM loja WHERE id={$this->id}";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
    
    public function editar(){
        pass;
    }
    
    public function carregar(){
        pass;
    }

}

    

