<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculo de Médias </title>
</head>
<body>
    
    <h1> Calculo de Médias </h1>

    <?php 
    
    $num = [8,10,9,7,10,9,8,10,10,10];
    $soma = 0;

    for ($i = 0; $i < 10; $i++){

        $soma += $num [$i];} 

        $media = $soma / 5;

        echo "A média desses numeros é igual à $media.";

    
    
    ?>

</body>
</html>