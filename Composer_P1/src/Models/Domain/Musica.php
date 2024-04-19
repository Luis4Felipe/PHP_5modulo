<?php
namespace Projeto\Models\Domain;

class Musica
{


    private $nome;      
    private $produtor;  

    // Construtor da classe Musica
    public function __construct($nome, $produtor)
    {
        // Configura o nome e o produtor da música ao criar um novo objeto
        $this->setNome($nome);
        $this->setProdutor($produtor);
    }

    // Método GET para obter o nome da música
    public function getNome()
    {
        return $this->nome;
    }

    // Método SET para definir o nome da música
    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    // Método GET para obter o produtor da música
    public function getProdutor()
    {
        return $this->produtor;
    }

    // Método SET para definir o produtor da música
    public function setProdutor($produtor)
    {
        $this->produtor = $produtor;
    }

}
