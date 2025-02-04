<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    
    <h2> Desconto do Produto </h2>

    <?php 
    
        $precoProduto = 100;
        $valorDesconto = 0;
        $codigoDesconto = 1;

        $formulaDesconto = ($precoProduto * $valorDesconto) / 100;

        switch ($codigoDesconto) {
            case 1 :
            $valorDesconto = 10;
            echo "O valor do Desconto é de: $valorDesconto ", "%";

            break;

            case 2 :
                $valorDesconto = 20;
                echo "O valor do Desconto é de: $valorDesconto ", "%";
                break;

            case 3 :
                $valorDesconto = 30;
                echo "O valor do Desconto é de: $valorDesconto ", "%";
                break; 

                default:
                echo "Erro: Desconto Inválido!";


        }




            echo "O valor do produto com o desconto de $valorDesconto % equivale a: R$ $precoProduto";
    
    
    
    
    ?>

</body>
</html>