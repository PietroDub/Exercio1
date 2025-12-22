<?php 
    class Paciente{
        public function __construct(
            protected string $nome,
            protected string $rg,
            protected string $endereco
        ){}

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setRg($rg){
            $this->rg = $rg;
        }

        public function getRg(){
            return $this->rg;
        }

        public function setendereco($endereco){
            $this->endereco = $endereco;
        }

        public function getendereco(){
            return $this->endereco;
        }
    }
?>