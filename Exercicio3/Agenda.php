<?php 
    class Agenda{
        private array $itens = [];
        public function __construct(
            public string $data = "",
            public Cliente $cliente,
            public Prestador $prestador
        ){}

        public function getData(){
            return $this->data;
        }
        public function getItens():array{
            return $this->itens;
        }
        public function getCliente():Cliente{
            return $this->cliente;
        }
        public function getPrestador():Prestador{
            return $this->prestador;
        }

        public function adicionarItem(Itens $item) {
            $this->itens[] = $item;
        }
    }
?>