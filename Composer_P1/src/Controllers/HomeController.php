<?php
namespace Filme\Controllers; // Define o namespace para o controle de filmes
namespace Serie\Controllers; // Define o namespace para o controle de séries
namespace Musica\Controllers; // Define o namespace para o controle de músicas
namespace Livro\Controllers; // Define o namespace para o controle de livros

class HomeController
{
    // Função que retorna uma saudação simples "Olá Mundo!"
    public function olaMundo($params)
    {
        return "Olá Mundo!";
    }

    // Função que carrega a página de inserção de série
    public function InsertSerie($params)
    {
        require_once("../src/views/Serie/inserir_serie.html");
    }

    // Função que carrega a página de inserção de filme
    public function InsertFilme($params)
    {
        require_once("../src/views/Filme/inserir_filme.html");
    }

    // Função que carrega a página de inserção de livro
    public function InsertLivro($params)
    {
        require_once("../src/views/Livro/inserir_livro.html");
    }

    // Função que carrega a página de inserção de música
    public function InsertMusica($params)
    {
        require_once("../src/views/Musica/inserir_musica.html");
    }
}
