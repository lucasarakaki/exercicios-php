<?php

// variáveis que vai receber o valor do produto
$valorProduto = 3999.10;

// defina umas da categorias para o produto "Eletrônico", "Vestuário", "Alimentos", "Outras categorias"
$categoria = "Eletrônico";


// criando função responsável por calcular o desconto, argumentos são as variáveis global
function calcularDesconto(
  $valorProduto,
  $categoria,
) {

  switch (true) {

      // primeiro caso
    case $categoria == "Eletrônico":
      // inserindo o valor do desconto
      $porcentagem = 10;
      //calculo do desconto
      $calc = ($porcentagem / 100) * $valorProduto;
      // valor final do produto
      $valorFinal = $valorProduto - $calc;
      echo "
        O seu produto pertence a categoria de " . $categoria . ", você obteve um desconto de " . $porcentagem . "% 
        <br>
        O valor do seu produto sem o desconto: R$" . $valorProduto . "
        <br>
        O valor agora é : R$" . $valorFinal;
      break;

      // segundo caso
    case $categoria == "Vestuário":
      // inserindo o valor do desconto
      $porcentagem = 20;
      //calculo do desconto
      $calc = ($porcentagem / 100) * $valorProduto;
      // valor final do produto
      $valorFinal = $valorProduto - $calc;
      echo "
          O seu produto pertence a categoria de " . $categoria . ", você obteve um desconto de " . $porcentagem . "% 
          <br>
          O valor do seu produto sem o desconto: R$" . $valorProduto . "
          <br>
          O valor agora é : R$" . $valorFinal;
      break;

      // terceiro caso
    case $categoria == "Alimentos":
      // inserindo o valor do desconto
      $porcentagem = 5;
      //calculo do desconto
      $calc = ($porcentagem / 100) * $valorProduto;
      // valor final do produto
      $valorFinal = $valorProduto - $calc;
      echo "
            O seu produto pertence a categoria de " . $categoria . ", você obteve um desconto de " . $porcentagem . "% 
            <br>
            O valor do seu produto sem o desconto: R$" . $valorProduto . "
            <br>
            O valor agora é : R$" . $valorFinal;
      break;

      // caso nenhuma categoria seja definida
    default:
      echo "Nenhuma categoria encontrada, sem desconto... O preço final é R$" . $valorProduto;
      break;
  }
}

// chamando a função
calcularDesconto($valorProduto, $categoria);
