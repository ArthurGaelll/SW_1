<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td {
            border: 1px solid black;
            text-align: center;
            
        }      
        .Eletrônicos {
            background-color: yellow;
        }
        .Roupas {
            background-color: red;
        }
        .Alimentos {
            background-color: blue;
        }
    </style>
</head>
<body>
<?php

$produtos = [
    ["Nome" => "Smartphone", "Preço" => 1500, "Categoria" => "Eletrônicos"],
    ["Nome" => "Camiseta", "Preço" => 50, "Categoria" => "Roupas"],
    ["Nome" => "Arroz", "Preço" => 25, "Categoria" => "Alimentos"],
    ["Nome" => "Notebook", "Preço" => 3500, "Categoria" => "Eletrônicos"],
    ["Nome" => "Calça Jeans", "Preço" => 120, "Categoria" => "Roupas"]
];

echo "<table>";
echo "<tr>
    <th>
        Nome
    </th>
        
    <th>
        Preço (R$)
    </th>
    
    <th>
        Categoria
    </th>
    </tr>";

foreach ($produtos as $produto) {
    $classe = $produto["Categoria"];
    echo "<tr class='{$classe}'>";
    echo "<td>{$produto["Nome"]}</td>";
    echo "<td>{$produto["Preço"]}</td>";
    echo "<td>{$produto["Categoria"]}</td>";
    echo "</tr>";
}

echo "</table>";
