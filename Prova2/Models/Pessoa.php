<?php 
    class Pessoa{
        public function __construct(
            protected string $nome
        )
        {}
    
        public function setNome($name){
            $this->nome = $name;
        }

        public function getNome(){
            return $this->nome;
        }
    }
?>