<?php 
require_once "Models/Conexao.class.php";
require_once "Models/Pessoa.php";
require_once "Models/PessoaDAO.class.php";
    class PessoaController{
        public function inserir(){
            $msg = array("");
            if($_POST){
                if(empty($_POST["nome"])){
                    $msg[0] = "Preencha o nome";
                }
            }
            if($msg[0] == ""){
                $pessoa = new Pessoa($_POST["nome"]);
                $pessoaDAO = new pessoaDAO();
                $retorno = $pessoaDAO->inserir($pessoa);
                echo $retorno;
            }
            require_once "Views/form_pessoa.php";  
        }
    }
?>