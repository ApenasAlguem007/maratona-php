<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

<?php
 
 class Produto {
     public $nome;
     public $preco;
     public $quantidade;
  
     public function __construct($nome, $preco, $quantidade) {
         $this->nome = $nome;
         $this->preco = $preco;
         $this->quantidade = $quantidade;
     }
  
     public function desconto($porcentagem) {
         $desconto = $this->preco * ($porcentagem / 100);
         $novoPreco = $this->preco - $desconto;
         echo "desconto: R$ " . $novoPreco . "<br>";
     }
  
     public function __destruct() {
         echo "{$this->nome} R$ {$this->preco} destruído.<br>";
     }
 }
  
 $produto1 = new Produto("banana", 95, 3);
 echo "<br>";
 $produto1->desconto(10);
 echo "<br>";
  
 unset($produto1);
  
 ?>
  

</body>
</html>