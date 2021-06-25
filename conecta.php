<?php

    $endereco = 'localhost';
    $usuario = 'root';
    $senha = 'root';
    $banco = 'academiaAMD';

    $link = mysqli_connect($endereco,$usuario,$senha,$banco)
    or die('Erro: '.mysqli_error($link));

    $sql = "INSERT INTO cadastroAMD values ";
    $sql .= "(null,";
    $sql .= "'".$_POST['nome']."',";
    $sql .= "'".$_POST['email']."',";
    $sql .= "'".$_POST['senha']."',";
    $sql .= "'".$_POST['telefone']."',";
    $sql .= "'".$_POST['especial']."')";



    $consulta = mysqli_query($link,$sql);

    if(!$consulta){
        die('erro: '.mysqli_error($link));
    } else {
        echo 'Matricula efetuada com sucesso!';
    }

?>