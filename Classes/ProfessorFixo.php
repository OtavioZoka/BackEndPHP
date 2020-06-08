<?php
class ProfessorFixo extends Professor
{
    private $horas = 40;
    private $valor;


    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function nomeClasse()
    {
        return get_class($this);
    }
}
