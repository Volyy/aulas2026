<?php

class Trazepio
{
    private $BaseMaior;
    private $BaseMenor;
    private $Altura;

    function area()
    {
        return (($this->BaseMaior + $this->BaseMenor) * $this->Altura) / 2;
    }

    function __construct($BaseMaior, $BaseMenor, $Altura)
    {
        $this->BaseMaior = $BaseMaior;
        $this->BaseMenor = $BaseMenor;
        $this->Altura = $Altura;
    }

    function __toString()
    {
        $string = "base maior: " . $this->BaseMaior;
        $string .= "\nbase menor: " . $this->BaseMenor;
        $string .= "\naltura: " . $this->Altura;
        $string .= "\narea: " . $this->area();

        return $string;
    }
}

$trapezios = [];
for ($i = 1; $i <= 4; $i++) {
    $trapezio = new Trazepio(readline("base maior: "), readline("base menor: "), readline("altura: "));
    print("\n");
    array_push($trapezios, $trapezio);
}

print("trapezio com a maior area: \n");

$maior = 0;
$maiorTrapezio = NULL;
foreach ($trapezios as $t) {

    if ($t->area() > $maior) {
        $maior = $t->area();
        $maiorTrapezio = $t;
    }
}
print($maiorTrapezio);
