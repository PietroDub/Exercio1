<?php 
    class Telefone{
        // private Pessoa $pessoa = new Pessoa()
        private ?Pessoa $pessoa = null;
        public function __construct(
            public int $ddd = 0,
            public string $numero = ""
        )
        {}
        
        public function getDDD():int{
            return $this->ddd;
        }
        public function getNumero():string{
            return $this->numero;
        }
        public function setPessoa($pessoa){
            $this->pessoa = $pessoa;
        }
        public function getPessoa(): ?Pessoa {
            return $this->pessoa;
        }   
    }
?>