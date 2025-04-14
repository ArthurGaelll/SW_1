<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Document</title><style>
        table,tr,td{
            border: 1px solid red;
        }
    </style></head><body><?php
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
    ?><table><?php
            $l = 1;
            while ($l <= $linhas){
                echo "<tr>";
                $c = 1; // cada vez que for gerar as colunas esta
                        // variável deve ser reiniciada
                while ($c <= $colunas){
                    echo "<td>linha $l coluna $c </td>";
                    $c++;
                }
                echo "</tr>";
                $l++;
            }
        ?></table></body></html>