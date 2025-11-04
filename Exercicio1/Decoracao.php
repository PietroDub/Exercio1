<?php 
    class Decoracao{
        public function __construct(
             public string $descritivo = ""
        ){}

        public function getDescritivo():string{
            return $this->descritivo;
        }
    }
?>