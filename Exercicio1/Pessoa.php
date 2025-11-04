<?php 
    class Pessoa{
        private array $telefones = [];
        public function __construct(
            private string $nome = "",
            int $ddd = 0, string $numero = ""
        ){
            $this->telefones[] = new Telefone($ddd, $numero);
        }

       public function getNome():string{
        return $this->nome;
       } 

       public function setCelular(int $ddd = 0, string $numero){
        $telefone = new Telefone($ddd, $numero);
        $this->telefones[] = $telefone;
       }

        public function exibir(): void {
            echo "<h3>Dados da Pessoa</h3>";
            echo "<b>Nome:</b> {$this->nome}<br>";

            if (!empty($this->telefones)) {
                echo "<b>Telefones:</b><br>";
                foreach ($this->telefones as $tel) {
                    echo "({$tel->getDDD()}) {$tel->getNumero()}<br>";
                }
            } else {
                echo "<i>Nenhum telefone cadastrado.</i><br>";
            }

            echo "<hr>";
        }

    }
?>