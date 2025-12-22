<?php 
class Tecnico extends Pessoa{
    public function __construct(
        protected string $especialidade,
        string $nome)
    {
        return parent::__construct($nome);
    }

    public function setespecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

    public function getEspecialidade(){
        return $this->especialidade;
    }
}
?>