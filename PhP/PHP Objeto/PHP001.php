<?php

require_once "model/poduto.php";

$p = new produto();

$p->id = 10;
$p->nome = "Tênis";
$p->vlrCompra = 100.00;
$p->vlrVenda = 150.00;
$p->qtdEstoque = 50;

echo "Dados do Produto: <br>";
echo "Código; " . number_format($p->id,2) . "<br>";
echo "Nome; " . $p->nome . "<br>";
echo "Compra; " . $p->vlrCompra . "<br>";
echo "Venda; " . $p->vlrVenda . "<br>";
echo "Estoque; " . $p->qtdEstoque . "<br>";
