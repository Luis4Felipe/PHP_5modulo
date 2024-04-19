<?php
namespace Projeto\Models\Domain;


class Filme
{


    private $nome; 
    private $autor; 

    // Construtor da classe Filme
    public function __construct($nome, $autor)
    {
        // Define o nome e o autor do filme ao criar uma instância da classe Filme
        $this->setnome($nome);
        $this->setautor($autor);
    }

    // Obtem o nome do filme
    public function getnome()
    {
        return $this->nome;
    }

    // Define o nome do filme
    public function setnome($nome)
    {
        return $this->nome = $nome;
    }

    // Obtem o autor do filme
    public function getautor()
    {
        return $this->autor;
    }

    // Define o autor do filme
    public function setautor($autor)
    {
        $this->autor = $autor;
    }
}
