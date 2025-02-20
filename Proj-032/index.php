<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>
<body>
    
    <h1> Numeros Primos  </h1>


    <?php

   function primo ($num){
        if ($num <= 1){
         return false;
   }

    for ($i = 2; $i < ($num); $i++){
        if ($num % $i == 0){
            return false;

        }

    }

            return true;
   }

       // Exemplo de uso
    $numero = 79;
       if (primo($numero)) {
         echo "$numero é um número primo.";
    } else {
         echo "$numero não é um número primo.";
}

    



?>

  



</body>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>
<body>
    
    <h1> Numeros Primos  </h1>


    <?php

   function primo ($num){
        if ($num <= 1){
         return false;
   }

    for ($i = 2; $i < ($num); $i++){
        if ($num % $i == 0){
            return false;

        }

    }

            return true;
   }

       // Exemplo de uso
    $numero = 79;
       if (primo($numero)) {
         echo "$numero é um número primo.";
    } else {
         echo "$numero não é um número primo.";
}

    



?>

  



</body>
>>>>>>> daca3c6ce685de1500e48d157a5296b2a97a9926
</html>