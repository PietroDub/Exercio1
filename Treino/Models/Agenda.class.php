<?php 
    class Agenda{
        private array $horarios = [];
        public function __construct(
            protected string $ano, 
            string $data, 
            string $hora
        )
        {
            $this->horarios[] = new Horario($data, $hora);
        }

        public function setAno($ano){
            $this->ano = $ano;
        }

        public function getAno(){
            return $this->ano;
        }

        public function setHorario($data, $hora){
            $this->horarios[] = new Horario($data, $hora);
        }

        public function getHorarios()
		{
			return $this->horarios;
		}
    }
?>