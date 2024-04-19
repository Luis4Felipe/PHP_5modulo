<?php
namespace Projeto\Controllers;

use Projeto\Models\DAO\MusicaDAO;
use Projeto\Models\Domain\Musica;

class MusicaController
{
    // Função responsável por carregar o formulário de inserção de nova música.
    public function inserir($params)
    {
        require_once("../src/Views/Musica/inserir_musica.html");
    }

    // Função responsável por receber os dados do formulário e inserir uma nova música no banco de dados.
    public function novo($params)
    {
        // Cria uma nova instância da classe Musica com os dados recebidos do formulário.
        $musica = new Musica(0, $_POST['nome'], ['produtor']);
        
        // Cria uma nova instância da classe MusicaDAO para interagir com o banco de dados.
        $musicaDAO = new MusicaDAO();

        // Verifica se a inserção da música foi bem-sucedida no banco de dados.
        if ($musicaDAO->inserir($musica))
        {
            // Retorna uma mensagem de sucesso caso a inserção tenha sido realizada com êxito.
            return "Música inserida com sucesso!";
        } 
        else    
        {
            // Retorna uma mensagem de erro caso a inserção tenha falhado.
            return "Erro ao inserir música!";
        }
    }
}
