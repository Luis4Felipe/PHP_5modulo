<?php
namespace Projeto\Models\DAO;
use Projeto\Models\Domain\Filme;

class FilmeDAO
{
    // Propriedade para armazenar a conexão com o BD
    private Conexao $conexao;

    public function __construct()
    {
        // Inicializa a conexão com o BD
        $this->conexao = new Conexao();
    }

    // Função para inserir um filme no BD
    public function inserir(Filme $filme)
    {
        try
        {
            // Prepara a query SQL para inserção
            $sql = "INSERT INTO filme (nome, autor) VALUES (:nome, :autor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            
            // Substitui os parâmetros da query pelos valores do objeto Filme
            $p->bindValue(":nome", $filme->getNome());
            $p->bindValue(":autor", $filme->getAutor());
            
            // Executa a query e retorna o resultado da execução (true para sucesso, false para falha)
            return $p->execute();
        } 
        // Exceção ocorrida durante a execução da inserção
        catch(\Exception $e)
        {
            // Retorna 0 em caso de erro
            return 0;
        }    
    }
}
