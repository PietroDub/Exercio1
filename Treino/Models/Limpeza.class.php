<?php 
    class Limpeza extends Servico{
        public function __construct(
            protected string $material_usado,
            protected string  $dente_tratado,
            string $descricao, float $preco)
        {
            return parent::__construct($descricao, $preco);
        }

        public function setMaterial_usado($material_usado){
            $this->material_usado = $material_usado;
        }

        public function getMaterial_usado(){
            return $this->material_usado;
        }

        public function setDente_tratado($dente_tratado){
            $this->dente_tratado = $dente_tratado;
        }

        public function getDente_tratado(){
            return $this->dente_tratado;
        }
    }
?>