<?php
// --- Inclui as classes (você pode usar autoload depois)
require_once 'Pessoa.php';
require_once 'Cliente.php';
require_once 'Prestador.php';
require_once 'Servico.php';
require_once 'Itens.php';
require_once 'Agenda.php';

$cliente = new Cliente("João Silva", "11999999999", "123.456.789-00");
$prestador = new Prestador("Carlos Souza", "11888888888", "Barbeiro");

$servico1 = new Servico("Corte de cabelo", 30.00);
$servico2 = new Servico("Barba", 20.00);

$item1 = new Itens("09:00", "Ativo", $servico1);
$item2 = new Itens("09:30", "Ativo", $servico2);

$agenda = new Agenda("10/11/2025", $cliente, $prestador);

$agenda->adicionarItem($item1);
$agenda->adicionarItem($item2);

echo "📅 Data: " . $agenda->getData() . "<br>";
echo "👤 Cliente: " . $agenda->getCliente()->getNome() . "<br>";
echo "💈 Prestador: " . $agenda->getPrestador()->getNome() . "<br><br>";

echo "🧾 Itens da Agenda:<br>";
foreach ($agenda->getItens() as $item) {
    echo "- " . $item->getHorario() . " | " . 
         $item->getServico()->getDescritivo() . " | " .
         "R$ " . number_format($item->getServico()->getPreco(), 2, ',', '.') .
         " | Status: " . $item->getStatus() . "<br>";
}
