<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <table>
    <tr>   
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <!-- Aqui começa o laço de repetição -->  
     <?php
        for ($i = 0; $i<=5; $i++) {
            echo "
                <tr>
                    <td> Linha $i coluna 1 </td>
                    <td> Linha $i coluna 2 </td>
                    <td> Linha $i coluna 3 </td>
                </tr>
            ";
        }   
    ?>
    <!-- Aqui terminha o laço de repetição -->
    </table>
</body>
</html>