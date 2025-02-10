<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Pedidos </title>
</head>
<body>
    
    <h2> Processamento de Pedidos de Compras </h2>


    <?php   
    
    // pedido numerado do cliente.
    $numPedido = 10;

    // contador dos pedidos.
    $cont = 1;

    do {

        echo "Processando pedido: " . $cont;
        echo "<br>";
        $cont++;

    }while ($cont <= $numPedido );

    echo "<br>";
        echo " Todos os pedidos foram processados. ";
    
    
    ?>

</body>
</html>