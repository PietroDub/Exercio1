<?php 
    class Aparelho{
        public function __construct(
            protected string $descritivo
        ){}

        public function setDescritivo($descritivo){
            $this->descritivo = $descritivo;
        }

        public function getDescritivo()
        {
            return $this->descritivo;
        }
    }
?>