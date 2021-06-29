<?php

class conecta {

    private static $url = 'localhost';
    private static $usuario = 'root';
    private static $senha = 'senac';
    private static $banco = 'academiaAMD';
    public $db;
/*
    public function __construct()
    {
        $db = $this->conectadb;
    }*/

    public function conectadb() {
        $link = mysqli_connect ($this->getUrl(), $this->getUsuario(), $this->getSenha(),
        $this->getBanco()) or die (mysqli_errno($link));
        return $link;
    }

    function getUrl()
    {
        return $this->url;
    }

    function getUsuario()
    {
        return $this->usuario;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getBanco()
    {
        return $this->banco;
    }
}





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