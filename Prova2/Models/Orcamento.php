<?php 
    class Orcamento{
        public function __construct(
            protected string $data_orcamento,
            protected float $preco,
            protected string $data_validade
        )
        {}

        public function setdata_orcamento($data_orcamento){
            $this->data_orcamento =  $data_orcamento;
        }

        public function getdata_orcamento(){
            return $this->data_orcamento;
        }

        public function setpreco($preco){
            $this->preco =  $preco;
        }

        public function getpreco(){
            return $this->preco;
        }
        
        public function setdata_validade($data_validade){
            $this->data_validade =  $data_validade;
        }

        public function getdata_validade(){
            return $this->data_validade;
        }

    }
?>