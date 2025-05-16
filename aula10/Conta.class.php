<?php
    class Conta{        
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if ($valor>$this->Saldo) {
                return "SALDO INSUFICIENTE";
            } else {
                $this->Saldo = $this->Saldo - $valor; 
                $result = "Seu saldo atuaal é de: R$" . $this->Saldo;
                return $result;
            }           

        }

        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            $result = "Seu saldo atuaal é de: R$" . $this->Saldo;
            return $result;

        }

        public function ConsultarSaldo(){
            echo "NOME: ". $this->Nome . "<br>";
            echo "CPF: ". $this->Cpf . "<br>";
            echo "SALDO: ". $this->Saldo. "<br>";

        }


       
    }


?>