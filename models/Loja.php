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
    public $fotos;

    
    public function __construct($id = false)
    {
        if ($id) {
            $this->id = $id;
            // var_dump($this);
            $this->carregar();
            // var_dump($this);
        }
    }

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
        return ($conexao->lastInsertId()) ;
    }

    public function deletar(){
        $query = "DELETE FROM loja WHERE id='{$this->id}'";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
    
    public function editar(){
        $query= "UPDATE loja SET titulo ='{$this->titulo}', area='{$this->area}', tem_mezzanino='{$this->tem_mezzanino}', shopping='{$this->shopping}',
                centro_comercial='{$this->centro_comercial}', frete_rua= '{$this->frente_rua}', descricao='{$this->descricao}', localizacao='{$this->localizacao}'
        WHERE id='{$this->id}'";
        $conexao = Conexao::pegarConexao();
        $conexao-> exec ($query);
        var_dump($query);
    }
    
    public function carregar(){
        
        $query = "SELECT * FROM loja WHERE id='{$this->id}'";
        $conexao = Conexao::pegarConexao();
        $result = $conexao->query( $query );
        $rows = $result->fetch(PDO::FETCH_ASSOC);
        
        return $rows;
    }
    public function fotos(){
        
        $query = "SELECT * FROM img_imovel WHERE imovel_id='{$this->id}'";
        $conexao = Conexao::pegarConexao();
        $result = $conexao->query( $query );
        $this->fotos = $result->fetchAll(PDO::FETCH_ASSOC);
        $rows= $this->fotos;
        
        return $rows;
    }

}

    

