<?php
$senha = $_POST["senha"];
$login = $_POST["login"];
if($login == "etec" and $senha == "informatica" ){
    echo "Logado com sucesso";
} else{
    echo "Senha ou login inválidos";
}

?>