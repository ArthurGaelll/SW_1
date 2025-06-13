<?php
include_once "Livro.class.php";

$livro1 = new Livro("1984", "George Orwell", true);
echo 'STATUS DO LIVRO: ';
echo $livro1->ExibirStatus();
echo "<hr>";

echo 'Foit feito um emprétimo: ';
echo $livro1->Emprestar();
echo "<hr>";

echo 'STATUS DO LIVRO: ';
echo $livro1->ExibirStatus();
echo "<hr>";







?>