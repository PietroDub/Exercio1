<?php 
    class Pessoa{
        private array $telefones = [];
        public function __construct(
            private string $nome = "",
            int $ddd = 0, string $numero = ""
        ){
            $this->telefones[] = new Celular($ddd, $numero);
        }

       public function getnome():string{
        return $this->nome;
       } 

       public function setcelular(int $ddd = 0, string $numero){
        $this->telefones[] = new Celular($ddd, $numero);
       }

    }
?>