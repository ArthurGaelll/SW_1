<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>Coluna 1</th>
            <th>Coluna 2</th>
            <th>Coluna 3</th>
            <th>Coluna 4</th>
        </tr>
    
    <?php
        for ($i=1; $i <= 8; $i++){
            echo "<tr>";
            if ($i % 2 == 0){
                echo "<td style ='background-color: blue;'>Linha $i</td>";
                echo "<td style ='background-color: blue;'>Linha $i</td>";
                echo "<td style ='background-color: blue;'>Linha $i</td>";
                echo "<td style ='background-color: blue;'>Linha $i</td>";
            } else {
                echo "<td style ='background-color: red;'>Linha $i</td>";
                echo "<td style ='background-color: red;'>Linha $i</td>";
                echo "<td style ='background-color: red;'>Linha $i</td>";
                echo "<td style ='background-color: red;'>Linha $i</td>";
            }
            echo "</tr>";              
            
        }
    ?>
    </table>
</body>
</html>