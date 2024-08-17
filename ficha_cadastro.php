<?php
    $nome = 'Elias Galvão';
    $idade = 19;
    $sexo = 'Masculino';
    $salario_mensal = 800.00;
    $salario_anual = $salario_mensal * 12;
    $esta_empregado = false;
    $anos_aposentadoria = null;
    $tecnologias = ["HTML", "CSS", "PHP", "JavaScript"];
    $tecnologias = implode(', ', $tecnologias);

    // Verifica se o empregado está aposentado
    if ($esta_empregado) {
        $status_emprego = "Empregado";
    } else {
        $status_emprego = "Desempregado";
    }

    // Calcula o ano de aposentadoria
    if ($sexo == 'Masculino') {
        $anos_aposentadoria = 65 - $idade;
    } else {
        $anos_aposentadoria = 62 - $idade;
    }
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Cadastral</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }

        .ficha {
            text-align: center;
            border: 1px solid #000;
            padding: 30px;
            width: 320px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .ficha h1 {
            font-size: 28px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            font-family: "Times New Roman", Times, serif;
        }

        .ficha p {
            font-size: 18px;
            margin: 8px 0;
            line-height: 1.4;
        }

        .ficha span {
            font-weight: bold;
        }

        .ficha span.valor {
            font-weight: normal;
        }

        /* Estilizando os valores principais */
        .ficha p span.valor {
            font-family: "Times New Roman", Times, serif;
            color: #000;
        }

        /* Negrito para 'Empregado' */
        .ficha p.status span.valor {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="ficha">
        <h1>Ficha Cadastral</h1>
        <p>Nome: <span class="valor"><?= $nome ?></span></p>
        <p>Idade: <span class="valor"><?= $idade ?></span></p>
        <p>Sexo: <span class="valor"><?= $sexo ?></span></p>
        <p>Salário Mensal: <span class="valor">R$ <?= number_format($salario_mensal, 2, ',', '.') ?></span></p>
        <p>Salário Anual: <span class="valor">R$ <?= number_format($salario_anual, 2, ',', '.')?></span></p>
        <p class="status">Status de Emprego: <span class="valor"><?= $status_emprego ?></span></p>
        <p>Anos para Aposentadoria: <span class="valor"><?= $anos_aposentadoria ?></span></p>
        <p>Habilidades: <span class="valor"><?= $tecnologias  ?></span></p>
    </div>
</body>

</html>
