<?php

$dragonball = ["goku" , "vegeta" , "bills" , "broly" , "picolo"];

$naruto =["naruto" , "zabuza Momochi" , "haku" , "obito" , "madara"];

$jojo = ["Dio" , "kira" , "jotaro" , "polnareff" , "avdol"];

$deathNote = ["kira" , "L" , "ryuk" , "Misa" , "Nate"];



lerArray($dragonball);
lerArray($naruto);
lerArray($jojo);
lerArray($deathNote);









function lerArray($lista){


    foreach($lista as $personagem){

    echo $personagem . " | ";
    }

    echo "\n";
 }