<?php 
    class Telefone{
        public function __construct(
            public int $ddd = 0,
            public string $numero = "",
            // private Pessoa $pessoa = new Pessoa()
            private $pesssoa = null
        )
        {}
        
        public function getDDD():int{
            return $this->ddd;
        }
        public function getnumero():string{
            return $this->numero;
        }
    }
?>