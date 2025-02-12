<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Peças de Carro </title>
</head>
<body>
    
    <h1> Peças de Carro  </h1>

    <?php 
        
        // criando a lista referente

        $peçasCarro = ["Retrovisor <br>", "Para-Choque <br>", "Roda <br>", "Pneu <br>", "Parabrisa <br>", "Porta <br>", "Porta-Malas <br>", "Estepe <br>", "Banco <br>", "Volante <br>"];

        // exibimdo a lista com as quebras de linhas para melhor leitura e organização.

        foreach($peçasCarro as $carroPeças){
            print_r ($carroPeças) . "<br";

        }
        
        
        
    ?>


</body>
</html>