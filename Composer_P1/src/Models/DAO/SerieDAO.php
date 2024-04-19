<?php
namespace Projeto\Models\DAO;
use Projeto\Models\Domain\Serie;


class SerieDAO
{
    private Conexao $conexao;


    public function __construct()
    {
        // Inicialização da conexão com o BD
        $this->conexao = new Conexao();
    }

    // Método para inserir uma nova série no BD
    public function inserir(Serie $serie)
    {
        try
        {
            // Query SQL para inserir uma nova série na tabela 'serie'
            $sql = "INSERT INTO serie (nome, criador) VALUES (:nome, :criador)";

            // Preparação da query SQL
            $p = $this->conexao->getConexao()->prepare($sql);

            // Ele vincula os valores aos parâmetros da query SQL
            $p->bindValue(":nome", $serie->getNome());
            $p->bindValue(":criador", $serie->getCriador());

            // Execução da query SQL
            return $p->execute();
        } 

        // Captura de exceções
        catch(\Exception $e)
        {
            // Em caso de exceção, retorna 0 se ouver algum erro
            return 0;
        } 
    }
}
