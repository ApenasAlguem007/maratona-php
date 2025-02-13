<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabuada </title>
</head>
<body>
    
    <h1> Tabuada </h1>

    <?php 
    

    // criação de variavis para armazenar os valores reutilizaveis

        $num = 8;
        $num1 = 1;

    // exibindo a conta:

        for ($num = 8; $num1 <= 10; $num1++){
            echo "$num x $num1 é: " . ($num * $num1) . "<br>";

        }
    
    
    ?>


</body>
</html>