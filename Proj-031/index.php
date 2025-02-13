<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculo de Desconto </title>
</head>
<body>
    
    <H1> Cálculo de Desconto </H1>

    <?php 


    function desconto ( $preço, $valorDesconto){

    return ($preço * $valorDesconto) / 100;
    

   }
    
       $resultado = desconto ( 150, 15 );


        $valorFinal = 150 - $resultado;

        echo "Total da compra com Desconto foi de R$: " . number_format($valorFinal, 2,',','.');


    
          





    ?>

</body>
</html>