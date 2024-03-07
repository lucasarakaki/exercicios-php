<?php

// criando a função 
function compararNumeros($a, $b)
{

  echo "Comparando valores das variáveis <br>";

  // iniciando comparação com switch case
  switch (true) {
    case $a > $b:
      echo "O primeiro número é maior.";
      break;
    case $a < $b:
      echo "O segundo número é maior.";
      break;
    case $a == $b:
      echo "Os números são iguais.";
      break;
  }
}

// declarando os números inteiros para comparação
$a = 422;
$b = 727;

// Chama a função para comparar os números
compararNumeros($a, $b);
