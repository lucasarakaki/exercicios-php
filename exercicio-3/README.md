# Exercício em PHP: Cálculo de Desconto por Categoria de Produto

Este é um exercício simples em PHP que demonstra como calcular o desconto de um produto com base em sua categoria. O desconto é aplicado de acordo com a categoria do produto, e o valor final é exibido na tela.

# Funcionalidades

A variável $valorProduto armazena o valor do produto.
A variável $categoria define a categoria do produto, que pode ser "Eletrônico", "Vestuário", "Alimentos" ou "Outras categorias".
A função calcularDesconto($valorProduto, $categoria) é responsável por calcular o desconto com base na categoria do produto.
Dentro da função, é utilizado um switch case para aplicar o desconto conforme a categoria do produto.
O desconto é calculado e o valor final do produto é exibido na tela.

# Como Usar

Abra o arquivo index.php em um servidor web que suporte PHP.
Execute o script PHP no navegador.
Você verá o resultado do cálculo do desconto com base no valor do produto e na categoria fornecida.

# Exemplo de Uso

<?php
include 'calcular_desconto.php';

// Valores das variáveis
$valorProduto = 3999.10;
$categoria = "Eletrônico";

// Chamando a função para calcular o desconto
calcularDesconto($valorProduto, $categoria);
?>

# Observações

Certifique-se de fornecer o valor do produto e a categoria como argumentos ao chamar a função calcularDesconto($valorProduto, $categoria).
Este é apenas um exemplo simples para demonstrar o uso de funções, variáveis e estruturas de controle em PHP para calcular descontos com base na categoria do produto.
