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
        <option value="x">[---SELECIONE---]</option>
        <option value="1">Sebastião</option>
        <option value="2">Miranda</option>
        <option value="3">Fabiana</option>
    </select>
    <input type="submit" value="votar" name="voto">

</form>

<?php

if(isset($_POST['voto'])){

    $cand = $_POST['candidato'];

    switch($cand){
        case(1): echo 'Votou em Sebastião'; break;
        case(2): echo 'Votou em Miranda'; break;
        case(3): echo 'Votou em Fabiana'; break;
        default: echo 'Voto desperdiçado'; break;
    }

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




