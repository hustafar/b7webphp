<?php

$nomeSujo = "  Rodrigo   ";
$nomeLimpo = trim($nomeSujo);

// echo "Nome Sujo: " . strlen($nomeSujo) . "<br>Nome Limpo: " . strlen($nomeLimpo);

$nome = "Rodrigo Talansky";

echo "Limpa espaços: " . trim($nomeSujo) . "<br>";
echo "Conta caracteres: " . strlen($nome) . "<br>";
echo "Muda caracteres para minusculos: " . strtolower($nome) . "<br>";
echo "Muda caracteres para maiusculos: " . strtoupper($nome) . "<br>";
echo "Substitui letras ou palavras numa string: " . str_replace('Talansky', 'AAAA', $nome) . "<br>";
echo "Corta uma parte da string: " . substr($nome, 0, 4) . "<br>";
echo "Procura posição de palavra na string: " . strpos($nome, "go") . "<br>";
echo "Transforma a primeira letra em maiuscula: " . ucfirst("rodrigo talansky") . "<br>";
echo "Transforma a primeira letra  de cada palavra em maiuscula: " . ucwords("rodrigo talansky") . "<br>";

$nomes = explode(' ', $nome); // Separa cada nome
echo "Nomes: ";
print_r($nomes);

$numero = 12913.12;

echo "<br>Formata um numero para o padrão desejado: " . number_format($numero, 1, ',', '.');