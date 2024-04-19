<?php
namespace Projeto\Controllers;

use Projeto\Models\DAO\LivroDAO;
use Projeto\Models\Domain\Livro;

class LivroController
{

    // Função para carregar o formulário de inserção de livro
    public function inserir($params)
    {
        require_once("../src/Views/Livro/inserir_livro.html");
    }

    // Função para processar a inserção de um novo livro
    public function novo($params)
    {
        // Criando um novo objeto Livro com os dados do formulário
        $livro = new Livro($_POST['nome'], $_POST['escritor']);

        // Instanciando o DAO (Data Access Object) para operações de banco de dados relacionadas a Livro
        $livroDAO = new LivroDAO();

        // Verificando se a inserção foi bem-sucedida e retornando uma mensagem apropriada
        if ($livroDAO->inserir($livro)) {
            return "O livro foi inserido com sucesso!";
        } else {
            return "Erro ao inserir livro!";
        }
    }
}
