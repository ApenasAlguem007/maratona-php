<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ficha de Pet </title>
</head>
<body>
    
    <h1> Ficha de Pet </h1>
    
    <?php 
    
    $fichas = [

        "ID" => 15685,
        "Nome" => "Nina",
        "Peso (kg) " => 5,
        "idade" => 3,
        "altura" => 20

    ];

    echo "Dados do Cliente: <br>";
        foreach ($fichas as $dados => $nome){

            echo " <br> $dados: $nome"; 
        }


    
    ?>



</body>
</html>