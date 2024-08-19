<?php

$nome = 'Elias Galvão';
$idade = 19;
$sexo = 'M';
$esta_empregado = true;
$salario_mensal = 800.00;
$tecnologias = ["HTML", "CSS", "PHP", "JavaScript"];
$tecnologias = implode(', ', $tecnologias);


// Verifica se o empregado está aposentado
$status_emprego = $esta_empregado == false
  ? 'Empregado'
  : 'Desempregado';
