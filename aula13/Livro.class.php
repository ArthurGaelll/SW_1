<?php

class Livro {
    private $Titulo;
    private $Autor;
    private $Disponivel;

    public function __construct($titulo, $autor,$disponivel) {
        $this->Titulo = $titulo;
        $this->Autor = $autor;
        $this->Disponivel = true;
    }

    public function getTitulo(){
        return $this->Titulo;
    }

    public function getDisponivel(){
        return $this->Disponivel;
    }

    public function Emprestar() {
        if ($this->getDisponivel() == true) {
            $this->disponivel = false;
        } else {
            echo 'O livro solicitado não está disponível no momento!';
        }
        
    }

    public function Devolver() {
        $this->disponivel = true;
        echo "Obrigado, Livro devolvido!";
    }
    

    public function ExibirStatus() {
    $titulo_livro = $this->getTitulo();
    $status_livro = $this->getDisponivel();
    if ($this->getDisponivel() == true) {
        $status_livro = "Disponível";
    } else{
        $status_livro = "Indisponível";
    }

    $resposta = "O livro ".$titulo_livro." está ".$status_livro;
    
    return $resposta;
}

}


?>
