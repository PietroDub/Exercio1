<?php 
    class Consulta{
        public function __construct(
            protected string $historico,
            private array $servicos = array(),
        )
        {}

        public function setHistorico($historico){
            $this->historico = $historico;
        }

        public function getHistorico(){
            return $this->historico;
        }

        public function setServicos($servicos){
            $this->servicos = $servicos;
        }

        public function getServico(){
            return $this->servicos;
        }
        
    }
?>