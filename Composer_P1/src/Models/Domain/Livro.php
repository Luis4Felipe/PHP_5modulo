<?php
namespace Projeto\Models\Domain;

class Livro{

    private $nome;
    private $autor;

    // Construtor que é chamado ao instanciar um novo objeto Livro
    public function __construct($nome, $autor)
    {
        // Define o nome e autor do livro usando os métodos setter
        $this->setNome($nome);
        $this->setAutor($autor);
    }

    // Método GET para obter o nome do livro
    public function getNome()
    {
        return $this->nome;
    }

    // Método SET para definir o nome do livro
    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    // Método GET para obter o autor do livro
    public function getAutor()
    {
        return $this->autor;
    }

    // Método SET para definir o autor do livro
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

}
