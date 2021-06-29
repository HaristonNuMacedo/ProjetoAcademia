<?php

include_once '../daoGene/daoGenerico.php';
class PessoaController {

    public function inserirPessoa($nome, $dtNasc, $login, $senha, $perfil, $email, $cpf) {

        $pessoa = new Pessoa();

        $daoGenerico = new daoGenerico();
    }
}