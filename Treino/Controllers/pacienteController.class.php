<?php 
require_once "Models/Conexao.class.php";
require_once "Models/Paciente.class.php";
require_once "Models/PacienteDAO.class.php";

    class pacienteController{
        public function inserir(){
            $msg = array("","","");
            if($_POST){
                if(empty($_POST["nome"])){
                    $msg[0] = "Preencha o nome";
                }
                if(empty($_POST["rg"])){
                    $msg[1] = "Preencha o rg";
                }
                if(empty($_POST["endereco"])){
                    $msg[2] = "endereco é obrigatória";
                }

                if($msg[0] == "" && $msg[1] == "" && $msg[2] == ""){
                    $paciente = new Paciente(0, $_POST["nome"], $_POST["rg"], $_POST["endereco"]);
                    
                    $pacienteDAO = new PacienteDAO();
                    $retorno = $pacienteDAO->inserir($paciente);
                    echo $retorno;
                }
            }
            require_once "Views/form_paciente.php";
        }
    }
?>