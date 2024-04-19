<?php

namespace Projeto\Controllers;

use Projeto\Models\DAO\FilmeDAO;
use Projeto\Models\Domain\Filme;

class FilmeController
{
    // Função para exibir o formulário de inserção de filme
    public function inserir($params)
    {
        require_once("../src/Views/Filme/inserir_filme.html");
    }

    public function novo($params)
    {
        // Cria um novo objeto Filme com base nos dados enviados pelo formulário
        $filme = new Filme($_POST['nome'],['autor']); // Correção: troquei ['autor'] por $_POST['autor']

        // Instancia um objeto FilmeDAO para interagir com o banco de dados
        $filmeDAO = new FilmeDAO();

        // Verifica se a inserção do filme foi bem-sucedida
        if ($filmeDAO->inserir($filme))
        {
            // Retorna uma mensagem de sucesso se o filme foi inserido com sucesso
            return "O filme foi inserido!";
        }   
        else {
            // Retorna uma mensagem de erro se ocorreu algum problema ao inserir o filme
            return "Erro ao inserir filme!";
        }
    }    
}