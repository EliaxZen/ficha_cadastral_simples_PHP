<?php
require 'constantes.php';
require 'data.php';
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ficha Cadastral</title>
  <style>
    /* Importação de fontes */
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap');

    /* Configurações globais */
    body {
      font-family: 'Roboto', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #333;
      animation: fadeIn 1s ease-in-out;
      padding: 20px;
      box-sizing: border-box;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .ficha {
      text-align: left;
      border-radius: 20px;
      padding: 30px;
      max-width: 500px;
      width: 100%;
      background: linear-gradient(145deg, #ffffff, #f0f0f0);
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      position: relative;
      overflow: hidden;
    }

    .ficha:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.2);
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .ficha:hover:before {
      opacity: 1;
    }

    .ficha:hover {
      transform: translateY(-10px);
      box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.4);
    }

    .ficha h1 {
      font-size: 2rem;
      text-align: center;
      font-weight: bold;
      margin-bottom: 20px;
      color: #1e3c72;
      font-family: 'Playfair Display', serif;
      border-bottom: 3px solid #2a5298;
      padding-bottom: 10px;
    }

    .ficha p {
      font-size: 1rem;
      margin: 12px 0;
      line-height: 1.6;
      font-family: 'Roboto', sans-serif;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: nowrap;
      /* Altera para evitar quebra de linha */
    }

    .ficha p:last-child {
      margin-bottom: 0;
    }

    .ficha span {
      font-weight: bold;
      color: #2a5298;
      font-family: 'Playfair Display', serif;
    }

    .ficha span.valor {
      font-weight: normal;
      color: #333;
      background-color: #f9f9f9;
      padding: 8px 12px;
      border-radius: 10px;
      transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      /* Alinha o conteúdo à direita */
      text-align: right;
      /* Alinha o texto à direita */
      flex: 1;
      white-space: nowrap;
      /* Impede quebra de linha */
    }

    .ficha p span.valor:hover {
      background-color: #2a5298;
      color: #fff;
      transform: scale(1.05);
    }

    .ficha p.status span.valor {
      font-weight: bold;
    }

    .ficha p span.valor.positiva {
      color: #008000;
    }

    .ficha p span.valor.negativa {
      color: #ff0000;
    }

    .ficha p span.icone {
      margin-right: 12px;
      /* Aumenta o espaçamento entre ícone e texto */
      font-size: 1.2rem;
      color: #2a5298;
      flex-shrink: 0;
      /* Impede que o ícone seja redimensionado */
    }

    /* Animação de entrada para a ficha */
    @keyframes slideIn {
      from {
        transform: translateY(50px);
        opacity: 0;
      }

      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .ficha {
      animation: slideIn 0.8s ease-out;
    }
  </style>
</head>

<body>
  <div class="ficha">
    <h1>Ficha Cadastral</h1>
    <p><span class="icone">👤</span>Nome: <span class="valor"><?= $nome ?></span></p>
    <p><span class="icone">🎂</span>Idade: <span class="valor"><?= $idade ?></span></p>
    <p><span class="icone">🚻</span>Sexo: <span class="valor"><?= $sexo ?></span></p>
    <p><span class="icone">💰</span>Salário Mensal: <span class="valor"><?= transformar_numero_em_moeda($salario_mensal) ?></span></p>
    <p><span class="icone">📈</span>Salário Anual: <span class="valor"><?= transformar_numero_em_moeda(calcular_salario_anual($salario_mensal)) ?></span></p>
    <p class="status"><span class="icone">📊</span>Status de Emprego: <span class="valor"><?= $status_emprego ?></span></p>
    <p><span class="icone">🏖️</span>Anos para Aposentadoria: <span class="valor"><?= calcular_anos_aposentadoria($idade, $sexo) ?></span></p>
    <p><span class="icone">💼</span>Habilidades: <span class="valor"><?= $tecnologias ?></span></p>
  </div>
</body>

</html>
