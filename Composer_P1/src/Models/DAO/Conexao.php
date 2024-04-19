<?php
namespace Projeto\Models\DAO;
use PDO;

class Conexao 
{
    private $conexao;

    // Método que cria uma nova conexão PDO ao instanciar o objeto Conexao
    public function __construct()
    {
        $this->conexao = new PDO("mysql:host=localhost; dbname=projeto", "root", "");
    }

    // Faz a conexão PDO criada pelo construtor
    public function getConexao()
    {
        return $this->conexao;
    }
}
