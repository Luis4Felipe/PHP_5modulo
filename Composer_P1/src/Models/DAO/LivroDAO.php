<?php

namespace Projeto\Models\DAO;

use Projeto\Models\Domain\Livros;


class LivroDAO
{
    // Propriedade privada para armazenar uma instância da classe Conexao
    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    // Função para inserir um novo livro no BD
    public function inserir(Livro $livro)
    {
        try
        {
            // Tentativa para executar a inserção do nome do livro na tabela 'livro'
            $sql = "INSERT INTO livro (nome) VALUES (:nome)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $livros->getNome());
            return $p->execute();
        } 
        
        // Exceção caso tenha algum erro na inserção
        catch(\Exception $e)
        {
            return 0;
        }

        try
        {
            // Tentativa de executar a inserção do autor do livro na tabela 'livro'
            $sql = "INSERT INTO livro (autor) VALUES (:autor)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":autor", $livros->getAutor());
            return $p->execute();
        } 
        
        // Exceção caso tenha algum erro na inserção
        catch(\Exception $e)
        {
            return 0;
        }   
    }  
}
