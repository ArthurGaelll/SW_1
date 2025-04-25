<?php
    include_once 'pessoa.class.php';

    //Instancia de um objeto (Uma Pessoa)
    $pessoa1 = new Pessoa;    
    $pessoa2 = new Pessoa;

    //var_dump($pessoa1);

    //Atribuíção de valores para o objeto
    $pessoa1->Nome = "Gael";
    $pessoa1->Altura = 1.85;
    $pessoa1->Peso = 70;

    $pessoa2->Nome = "Maria";
    $pessoa2->Altura = 1.55;
    $pessoa2->Peso = 50;

    //Chamando um método da classe
    $pessoa1->MostrarDados();    
    $pessoa2->MostrarDados();
            

?>