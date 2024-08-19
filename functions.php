<?php
// Calculo do salário anual

/**
 * Calcula o salário anual do funcionário
 *
 * @param float $salario_mensal valor que o funcionário recebe por mês
 *
 * @return float salário anual do funcionário
 */
function calcular_salario_anual(float $salario_mensal): string
{
  $terco_de_ferias = $salario_mensal / 3;
  return $salario_mensal * 13 + $terco_de_ferias;
}

// Calcular quantos anos faltam para se aposentar

/**
 * Calcula o tempo em anos para se aposentar
 *
 * @param int $idade idade do funcionário
 * @param string $sexo sexo do funcionário, M = Masculino e F = Feminino
 *
 * @return int tempo em anos para se aposentar
 */
function calcular_anos_aposentadoria(int $idade, string $sexo): int
{
  return $sexo === 'M' ? IDADE_APOSENTADORIA_MASCULINA - $idade : IDADE_APOSENTADORIA_FEMININA - $idade;
}

// Transformar número em valor monetário (moeda)

/**
 * Transforma um número em formato monetário
 *
 * @param int|float $valor valor numérico a ser formatado
 *
 * @return string valor formatado como moeda
 */
function transformar_numero_em_moeda(int|float $valor): string
{
  return "R$ ".number_format($valor, 2, ',', '.');
}
