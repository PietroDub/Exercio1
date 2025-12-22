<?php 
    class Exame extends Servico{
        public function __construct(
            protected string $medida_preventiva,
            protected string $tipo_exame,
            string $descricao, float $preco)
        {
            return parent::__construct($descricao, $preco);
        }

        public function setmedida_preventiva($medida_preventiva){
            $this->medida_preventiva = $medida_preventiva;
        }

        public function getmedida_preventiva(){
            return $this->medida_preventiva;
        }

        public function setTipo_exame($tipo_exame){
            $this->tipo_exame = $tipo_exame;
        }

        public function getTipo_exame(){
            return $this->tipo_exame;
        }
    }
?>