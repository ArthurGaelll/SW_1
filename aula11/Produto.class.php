<?php
class Produto{
    private $Nome;
    private $Preco;
    private $Quantidade;


    public function __construct($nome , $preco=0, $quantidade=0){
        $this->Nome = $nome;
        $this->Preco = $preco;
        $this->Quantidade = $quantidade;
    }

    public function getNome(){
        return $this->Nome;
    }
 
    public function getPreco(){
        return $this->Preco;
    }

    public function setNome($nome){
        $this->Nome;
    }

    public function setPreco($preco){
        $this->Preco;
    }

public function adicionarEstoque($adicionar){
    if($adicionar > 0) {
        $this->Quantidade += $adicionar;

    } else{
        echo"O valor tem que ser maior que 0.<br>";
    }
 }
public function removerEstoque($adicionar){
    if($adicionar>0 && $adicionar <= $this->Quantidade) {
        $this->Quantidade -= $adicionar;

    } else{
        echo "Invalido!<br>";
    }

}

public function mostrarDetalhes(){
    echo"Nome: {$this->Nome} <br>";
    echo"Preço: {$this->Preco} <br>";
    echo"Quantidade: {$this->Quantidade}"; 

}
}
?>