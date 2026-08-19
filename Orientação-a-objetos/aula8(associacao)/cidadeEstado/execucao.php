<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$cidades = [];

$sc = new Estado();
$sc->setNome("Santa Catarina");
$sc->setSigla("SC");

$pr = new Estado();
$pr->setNome("Parana");
$pr->setSigla("PR");

$florianopolis = new Cidades();
$florianopolis->setNome("Florianopolis");
$florianopolis->setAltitude(3);
$florianopolis->setQntdHabitantes(587486);
$florianopolis->setEstado($sc);

array_push($cidades , $florianopolis);

$blumenau = new Cidades();
$blumenau->setNome("Blumenau");
$blumenau->setQntdHabitantes(385558);
$blumenau->setAltitude(202);
$blumenau->setEstado($sc);

array_push($cidades , $blumenau);

$foz = new Cidades();
$foz-> setNome("Foz do Iguaçu");
$foz-> setQntdHabitantes(297352);
$foz-> setAltitude(164);
$foz-> setEstado($pr);

array_push($cidades , $foz);

$cascavel = new Cidades();
$cascavel-> setNome("cascavel");
$cascavel-> setQntdHabitantes(368195);
$cascavel-> setAltitude(781);
$cascavel-> setEstado($pr);

array_push($cidades , $cascavel);

foreach($cidades as $c){
    print("\nA cidade de " . $c->getNome() . ", localizada no estado " . $c->getEstado() . ", possui " . $c->getQntdHabitantes() . " habitantes e uma altitude de " . $c->getAltitude() . " metros.\n");
}
