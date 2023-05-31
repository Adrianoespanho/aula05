<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex05</title>
</head>
<body>
<?php
// Criação de um array de frutas
$fruits = ["maçã", "banana", "laranja"];

// Remover um elemento específico do array
unset($fruits[1]);

// Imprimir o conteúdo atualizado do array
print_r($fruits);
?>
</body>
</html>