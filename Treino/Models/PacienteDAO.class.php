<?php 
    class PacienteDAO extends Conexao{
        public function __construct($db = null)
        {
            return parent::__construct($db);
        }
        public function inserir(Paciente $paciente){
            $sql = "INSERT INTO paciente (nome, rg, endereco) VALUES (?,?,?)";
            try{
                // var_dump($this->db);
			    // die;
			    //preparar a frase sql
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $paciente->getNome());
                $stm->bindValue(2, $paciente->getRg());
                $stm->bindValue(3, $paciente->getEndereco());

                $stm->execute();
                $this->db = null;
                return "Inserido com sucesso!";
            } catch(PDOException $e){
                $this->db = null;
                return "Problema ao inserir!";
            }
        }
    }
?>