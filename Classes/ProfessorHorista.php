<?php
class ProfessorHorista extends Professor
{
    private $horas;
    private $valor;


    public function __construct($horas, $valor)
    {
        $this->horas = $horas;
        $this->valor = $valor;
    }
    public function getHoras()
    {
        return $this->horas;
    }
    public function setHoras($horas)
    {
        $this->horas = $horas;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function calcularSalario()
    {
        return $this->horas * $this->valor;
    }
    public function nomeClasse()
    {
        return get_class($this);
    }
}
