<?php

include_once ('../conecta.php');
include_once ('../model/poduto.php');

class daoGenerico {
    public $conn;
        $conn = new conecta();
        if($conn == true){
            $sql = "inserir into pessoa values (null, '" . $p->getNome() ."',
            '" . $p->getDtNasc() . "', '" . $p->getLogin() . "', '" . $p->getSenha() . "',
            '" . $p->getPerfil() . "', '" . $p->getEmail() . "' , '" . $p->getCpf() . "')";
            if(mysqli_query($conn->conectadb(),$sql))
                return "Dados cadastados com sucesso!";
            else 
                return "Erro no cadastramento.";
                mysqli_close($conn->conectadb());
    }

}