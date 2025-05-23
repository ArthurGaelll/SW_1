<?php
class Produto{
    private $Nome;
    private $Preco;
    private $Quantidade;


    public function __construct($nome , $preco=0 , $quantidade=0){
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
        echo "Não tem como você reduzir seu estoque aqui!";
    }
 }
public function removerEstoque($retirar){
    if($retirar < 0) {
        $this->Quantidade -= $retirar;

    } else{
        echo "Não tem como você adicionar seu estoque aqui!";
    }

}

public function mostrarDetalhes(){
    echo "Nome: ". $this->Nome . "<br>";
    echo "Preço: ". $this->Preco . "<br>"; 

}
}
?>