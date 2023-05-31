<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex06</title>
</head>
<body>
<?php
// Criação de um array desordenado
$numbers = [5, 3, 1, 4, 2];

// Ordenar o array em ordem crescente
sort($numbers);

// Imprimir o array ordenado
foreach ($numbers as $number) {
    echo $number . " ";
}
?>
</body>
</html>