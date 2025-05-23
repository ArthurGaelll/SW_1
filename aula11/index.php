<?php
include_once 'Produto.class.php';
$produto = new Produto("Mouse", 30, 2);
$produto->adicionarEstoque(5);
?>