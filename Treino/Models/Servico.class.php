<?php 
    class Servico{
        public function __construct(
            protected string $descricao,
            protected float $preco
        ){}

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getPreco(){
            return $this->preco;
        }
    }

?>