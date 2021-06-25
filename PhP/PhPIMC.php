<?php

    echo "<h1 style='color: red; font-family: Calibri'>CALCULANDO IMC</h1>";
    $peso = 64;
    $altura = 1.80;

    $imc = $peso / ($altura * $altura);

    $nome = 'HaristinAMD';
    echo 'Nome: ' . $nome;
    print_r("<br>" . number_format( $imc,2) . "<br>");

    if($imc <= 18.5){
        print_r('Está Magro!<br>');
    } else if($imc <= 24.9){
        print_r("Está Normal!");
    } else if($imc <= 30){
        print_r('Está Sobrepeso!<br>');
    } else if($imc > 30){
        print_r('Está Magro!<br>');
    }

?>