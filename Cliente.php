<?php 
    class Cliente extends Pessoa{
        private array $festas = [];
        public $cpf;
        public function __construct($nome, $cpf, $data_contrato, $data_festa, $valor)
        {
            parent::__construct($nome);
            $this->cpf = $cpf;
            $this->festas[] = new Festa($data_contrato, $data_festa, $valor);
        }

        public function getCPF():string{
            return $this->cpf;
        }

        public function setFesta(string $data_contrato, string $data_festa, int $valor){
            $this->festas[] = new Festa($data_contrato, $data_festa, $valor);
        }
    }
?>