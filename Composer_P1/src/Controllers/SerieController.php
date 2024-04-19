<?php
namespace Projeto\Controllers;

use Projeto\Models\DAO\SerieDAO;
use Projeto\Models\Domain\Serie;

class SerieController
{
    // Função para exibir o formulário de inserção de uma nova série
    public function inserir($params)
    {
        require_once("../src/Views/Serie/inserir_Serie.html");
    }

    // Função para lidar com a inserção de uma nova série no banco de dados
    public function novo($params)
    {
        // Cria uma nova instância da classe Serie com os dados recebidos do formulário
        $serie = new Serie(0, $_POST['nome'],['criador']);
        // Instancia um objeto da classe SerieDAO para interagir com o banco de dados
        $serieDAO = new SerieDAO();

        // Verifica se a inserção no banco de dados foi bem-sucedida
        if ($serieDAO->inserir($serie))
        {
            // Retorna uma mensagem de sucesso caso a inserção seja bem-sucedida
            return "Série inserida com sucesso!";
        }   
        else
        {
            // Retorna uma mensagem de erro caso a inserção falhe
            return "Erro ao inserir série!";
        }
    }   
}
