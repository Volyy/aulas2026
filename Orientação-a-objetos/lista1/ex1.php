<?php
require_once("model/Carro.php");

$carros = [
    new Carro("Impreza", "Subaru", 1997, 230),
    new Carro("Uno", "Fiat", 2010, 150),
    new Carro("Aventador", "Lamborghini", 2022, 350)
];

$maisRapido = $carros[0];
$maisLento = $carros[0];

foreach ($carros as $carro) {
    if ($carro->getVelocidadeMax() > $maisRapido->getVelocidadeMax()) {
        $maisRapido = $carro;
    }
    
    if ($carro->getVelocidadeMax() < $maisLento->getVelocidadeMax()) {
        $maisLento = $carro;
    }
}

echo "O carro mais rapido é: {$maisRapido->getModelo()}-{$maisRapido->getMarca()}, fabricado em {$maisRapido->getAnoDeFabricacao()}, com velocidade maxima de {$maisRapido->getVelocidadeMax()}km/h.\n\n";




echo "O carro mais lento é: {$maisLento->getModelo()}-{$maisLento->getMarca()}, fabricado em {$maisLento->getAnoDeFabricacao()}, com velocidade máxima de {$maisLento->getVelocidadeMax()}km/h.\n";

?>