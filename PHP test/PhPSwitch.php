<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>

<h3>Eleições para Sindico</h3>
<label>Selecione o seu candidato</label>

<form method="POST" action="">

    <label>Candidato:</label>
    <select name="candidato">
        <option value="x" name="nulo">[---SELECIONE---]</option>
        <option value="1" name="cand01">Sebastião</option>
        <option value="2" name="cand02">Miranda</option>
        <option value="3" name="cand03">Fabiana</option>
    </select>
    <input type="submit" value="votar" name="voto">
    <<input type="submit" value="encerrar" name="encerra">

</form>

<?php
if(isset($_COOKIE[$cookie_name])) {
      setcookie($cookie_c1, 0);
      setcookie($cookie_c2, 0);
      setcookie($cookie_c3, 0);
      setcookie($cookie_n, 0);
      setcookie($cookie_contador, 1);
      setcookie($x, 0);
      setcookie($cookie_vencedor, 0);
}

if(isset($_POST['voto'])){

    $cand = $_POST['candidato'];
    
    do{
        $cookie_contador ++;
        switch($cand){
            case(1): 
                echo 'Votou em Sebastião'; $cookie_c1 ++;
            break;

            case(2): 
                echo 'Votou em Miranda'; $cookie_c2 ++;
            break;

            case(3): 
                echo 'Votou em Fabiana'; $cookie_c3 ++;
            break;

            default: 
                echo 'Voto desperdiçado'; $cookie_n ++;
                break;
        }

    } while ($_COOKIE[$cookie_contador] < 5);

        if ($_COOKIE[$cookie_vencedor] <= $_COOKIE[$cookie_c1]) {
            setcookie($cookie_vencedor, $_COOKIE[$cookie_c1]);
            $nomeVencedor = 'Sebastião';
        } 
        if ($cookie_vencedor <= $_COOKIE[$cookie_c2]) {
            setcookie($cookie_vencedor, $_COOKIE[$cookie_c2]);
            $nomeVencedor = 'Miranda';
        } 
        if ($cookie_vencedor <= $_COOKIE[$cookie_c3]) {
            $setcookie($cookie_vencedor, $_COOKIE[$cookie_c3]);
            $nomeVencedor = 'Fabiana';
        } 

    echo "<br>Síndico eleito: $_COOKIE[$nomeVencedor], com $_COOKIE[$cookie_vencedor] votos";
    echo "<br>Votos Nulos: $cookie_n votos.";
    echo "<br>____FIM!____";

    //REPETIÇÃO
} 


?>

<?php

echo "<br><br><h1 style='color: red; font-family: Calibri'>Idade</h1>";

$idade = 25;

switch($idade){
    case ($idade < 18): echo 'Menor de idade'; break;
    case ($idade > 18): echo 'Maior de idade'; break;
    default: echo 'Está no limpo';
}

?>

</body>
</html>




