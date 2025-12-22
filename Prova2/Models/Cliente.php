<?php 
class Cliente extends Pessoa{
    public function __construct(
        protected string $cpf,
        string $nome)
    {
        return parent::__construct($nome);
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
    public function getCPF(){
        return $this->cpf;
    }
}
?>