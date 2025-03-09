<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$data_nasc = $_POST["data_nasc"];
$cartoes_credito = $_POST["CartõesDeCrédito"];

echo "Seu nome é: $nome seu email é: $email você nasceu em: $data_nasc e a bandeira do seu cartão é: $cartoes_credito";
?>