<?php
    class Lampada{
        
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        //Métodos
        public function Ligar(){   
            $this->Status = True;            
        }

        public function Desligar(){    
            $this->Status = False;       
            

        }

        public function MostrarDados(){           
            echo "O Fabricante é: ". $this->Fabricante . "<br>";
            echo "A Tensão é: ". $this->Tensao . "<br>";
            echo "A Potencia é: ". $this->Potencia . "<br>";
            echo "A Cor é: ". $this->Cor . "<br>";
            if ($this->Status == 1) {
                echo "Os Status é: LIGADA!";
            } else {
                echo "Os Status é: DESLIGADA!";
            }           

        }
    }

?>