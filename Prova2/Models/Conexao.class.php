<?php 
    class Conexao{
        public function __construct(protected $db = null)
        {
            $parametros = "mysql:host=localhos;dbname=prova2;charset=utf8mb4";
            try{
                $this->db = new PDO($parametros, "root", "");
            } catch(PDOException $e){
                echo $e->getMessage();
                echo $e->getCode();
                die("Problema na conexão");
            }
        }
    };
?>