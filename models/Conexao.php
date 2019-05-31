    
<?php
class Conexao
{
    public static function pegarConexao()
    {
        $drive = 'mysql';
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'imoveisinvestimentos';
        $conexao = new PDO($drive . ':host=' . $hostname . ';dbname=' . $database, $username, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}
