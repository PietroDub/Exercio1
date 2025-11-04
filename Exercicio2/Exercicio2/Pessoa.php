<?php 
    class Pessoa{
        public function __construct(
            private string $nome = ""
        ){}

        public function getNome():string{
            return $this->nome;
        }

        public function setCelular(int $ddd = 0, string $numero){
            $telefone = new Telefone($ddd, $numero);
            $this->telefones[] = $telefone;
       }
    }
?>