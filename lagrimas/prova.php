<?php

function helloWorld() {
  echo "Hello World!" . PHP_EOL;
}

helloWorld();

function helloNome($nome) {
  echo "Hello $nome!" . PHP_EOL;
}

helloNome("Paulo"); 

$alunos = ["Ana", "Paulo", "Roberto", "Clovis", "Ribeiro"];

echo $alunos[4]; 

$numeros = [1, -2, 3, -4, 5];

function mostrarNumeros($numeros) {
  echo "Números positivos:" . PHP_EOL;
  foreach ($numeros as $numero) {
    if ($numero > 0) {
      echo "$numero ";
    }
  }

  echo PHP_EOL . "Números negativos:" . PHP_EOL;
  foreach ($numeros as $numero) {
    if ($numero < 0) {
      echo "$numero ";
    }
  }
  echo PHP_EOL;
}

mostrarNumeros($numeros);

function mostrarNomesComTamanho($nomes) {
  foreach ($nomes as $nome) {
    echo "$nome tem " . strlen($nome) . " letras" . PHP_EOL;
  }
}

mostrarNomesComTamanho($alunos);

$aluno = [
  "nome" => "Paulo",
  "idade" => 18,
  "cursoTecnico" => "Informática"
];

function mostrarIdade($aluno) {
  if ($aluno["idade"] < 18) {
    echo "{$aluno["nome"]} tem menos de 18 anos." . PHP_EOL;
  } else {
    echo "{$aluno["nome"]} tem mais de 18 anos." . PHP_EOL;
  }
}
