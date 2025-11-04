<?php 
    class Chef extends Pessoa{
        public string $especialidade = "";

        public function __construct($nome, $especialidade)
        {
            parent::__construct($nome);
            $this->especialidade = $especialidade;
        }

        public function getEspecialidade():string{
            return $this->especialidade;
        }
    }
?>