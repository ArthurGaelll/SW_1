<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php" method="POST">
    <p>Vamos criar uma tabela!!</p>
    <p>Quantas Colunas você deseja na sua tabela?: <input type="number" name="colunas" required></p>
    <p>Quantas Linhas você deseja na sua tabela?: <input type="number" name="linhas" required></p>  
    <input type="submit" value="criar">
    </form>  
</html>