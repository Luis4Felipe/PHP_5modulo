<?php
namespace Projeto\Models\Domain;


class Serie
{


    private $nome;
    private $criador;


    public function __construct($nome, $criador)
    {
        // Ao instanciar um objeto Serie, ele irá definir automaticamente o nome e o criador.
        $this->setNome($nome);
        $this->setCriador($criador);
    }

    // Método para obter o nome da série.
    public function getNome()
    {
        return $this->nome;
    }

    // Método para definir o nome da série.
    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    // Método para obter o criador da série.
    public function getCriador()
    {
        return $this->criador;
    }

    // Método para definir o criador da série.
    public function setCriador($criador)
    {
        $this->criador = $criador;
    }
}
