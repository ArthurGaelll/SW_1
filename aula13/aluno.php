<?php
include_once 'Aluno.class.php';

$fulano = new Aluno ("Gael", 7, 7);
$nome = $fulano->getNome();
$nota1 = $fulano->getNota1();
$nota2 = $fulano->getNota2();
$media = $fulano->CalculaMedia($nota1,$nota2);
echo $media;
echo $fulano->verificarSituacao($media);
$fulano->MostrarDados();

?>