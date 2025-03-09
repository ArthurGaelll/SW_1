<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p4.php" method="POST">        
        <p>Digite o seu nome: <input type="text" name="nome" required ></p>
        <p>Digite o seu email: <input type="email" name="email" required ></p>
        <p>Digite sua data de nascimento <input type="date" name="data_nasc" required></p>        
        <select name="CartõesDeCrédito" >
            <option value="MasterCard"> MasterCard </option>
            <option value="Visa"> VISA </option>
            <option value="Elo"> Elo </option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>