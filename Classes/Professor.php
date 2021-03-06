<?php
class Professor
{
    private $nome;
    private $idade;
    private $matricula;

    public function __construct($nome, $idade, $matricula)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function nomeClasse()
    {
        return get_class($this);
    }
}
