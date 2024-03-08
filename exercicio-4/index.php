<?php

// definindo a váriavel categoria, valores a receber => "Eletrônicos" "Vestuário" "Alimentícios" ou null;
$categoria = null;


// criando a função responsável por verificar qual a categoria definida
function verificarCategoria($categoria)
{

  // realizando a verificação com o switch case
  switch (true) {
      // primeira verificação
    case $categoria == "Eletrônicos":
      echo "Essa categoria é de produtos eletrônicos";
      break;

      // primeira verificação
    case $categoria == "Vestuário":
      echo "Essa categoria é de produtos de vestuário";
      break;

      // primeira verificação
    case $categoria == "Alimentícios":
      echo "Essa categoria é de produtos alimentícios";
      break;

      // Sem categoria
    default:
      echo "Categoria desconhecida";
      break;
  }
}


// chamando a função responsável
verificarCategoria($categoria);
