<?php 
    class Cliente extends Pessoa{
        private array $festas = [];
        private string $cpf;
        public function __construct($nome, $cpf, $data_contrato = null, $data_festa = null, $valor = null)
        {
            parent::__construct($nome);
            $this->cpf = $cpf;
        }
        public function getCPF():string{
            return $this->cpf;
        }

        public function setFesta(string $data_contrato, string $data_festa, float $valor){
            $festa = new Festa($data_contrato, $data_festa, $valor);
            $this->festas[] = $festa;
            return $festa;
        }

            public function getFestas(): array {
        return $this->festas;
    }
    }
?>