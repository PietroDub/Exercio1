<?php 
    class Contratado extends Pessoa{
        public $cnpj;
        
        public function __construct($nome, $cnpj){
        parent::__construct($nome);
        $this->cnpj = $cnpj;
    }

    public function getCNPJ():string{
        return $this->cnpj;
    }
    }
?>