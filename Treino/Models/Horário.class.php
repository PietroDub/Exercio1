<?php 
    class Horario{
        public function __construct(
            protected string $data, 
            protected string $hora,
            private $paciente = null,
            private array $consultas = array()
        )
        {}

        public function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

        public function setHora($hora){
            $this->hora = $hora;
        }

        public function getHora(){
            return $this->hora;
        }

        public function setPaciente($paciente)
        {
            $this->paciente = $paciente;
        }

        public function getPaciente()
        {
            return $this->paciente;
        }

        public function getConsultas() 
        {
            return $this->consultas;
        }

        public function setConsulta($consultas)
        {
            $this->consultas[] = $consultas;
        }


    }
?>