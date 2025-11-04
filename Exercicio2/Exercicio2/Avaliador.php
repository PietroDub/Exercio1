<?php 
    class Avaliador extends Pessoa{
        public string $cpf = "";
        private array $avaliacoes = [];

        public function __construct($nome, $cpf)
        {
            parent::__construct($nome);
            $this->cpf = $cpf;
        }

        public function getEspecialidade():string{
            return $this->cpf;
        }

        public function fazerAvaliacao(Receita $receita, float $nota): Avaliacao {
        $avaliacao = new Avaliacao($nota, $this, $receita);
        $this->avaliacoes[] = $avaliacao;
        return $avaliacao;
        }

        public function getAvaliacoes(): array {
            return $this->avaliacoes;
        }
    }
?>