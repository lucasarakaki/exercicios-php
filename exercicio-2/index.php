<?php

// Função para verificar o acesso com base na idade e no acesso autorizado
function verificarAcesso($idade, $acesso)
{

  echo "Comparando valores das variáveis <br>";

  // iniciando comparação com switch case
  switch (true) {
    case $idade >= 18 && $acesso == true:
      echo "Acesso autorizado";
      break;
    case $idade < 18:
      echo "Acesso negado. Idade mínima requerida: 18 anos";
      break;
    case $idade >= 18 && $acesso == false:
      echo "Acesso negado. Autorização necessária";
      break;
  }
}

// passando valores das variáveis
$idade = 22;
$acesso = true;

// Chamando a função para verificar o acesso
verificarAcesso($idade, $acesso);
