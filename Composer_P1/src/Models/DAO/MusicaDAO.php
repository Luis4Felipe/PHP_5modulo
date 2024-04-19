<?php
namespace Projeto\Models\DAO;
use Projeto\Models\Domain\Musica;

class MusicaDAO
{
    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao(); // Inicializa a conexão no construtor
    }

    // Função para inserir uma música no BD
    public function inserir(Musica $musica)
    {
        try
        {
            // Prepara e executa a query SQL para inserir o nome da música no BD
            $sql = "INSERT INTO musica (nome) VALUES (:nome)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $musica->getNome());
            return $p->execute(); // Retorna o resultado da execução da query (true ou false)
        } 
        
        catch(\Exception $e)
        {
            return 0; // Retorna 0 se tiver um erro
        } 

        try
        {
            // Prepara e executa a query SQL para inserir o produtor da música no BD
            $sql = "INSERT INTO musica (produtor) VALUES (:produtor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":produtor", $musica->getProdutor());
            return $p->execute(); // Retorna o resultado da execução da query (true ou false)
        } 
        
        catch(\Exception $e)
        {
            return 0; // Retorna 0 se tiver algum erro
        } 
    }    
}
