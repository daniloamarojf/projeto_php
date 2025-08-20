soma de Notas: 40
<?php
echo '<hr>';

// Título da secção
echo '<h2> 1 - Extract </2>';

// Criação de um array associativo com nome do aluno e quatro notas
$alunos = [
    'aluno' => 'Maria',
    'Nota1' => 10,
    'Nota2' => 10,
    'Nota3' => 10,
    'Nota4' => 10,
];
// Exibe o conteudo do array formatado na tela
echo "<pre>";
print_r($alunos);
echo "<pre>";

// Inicializa a variável que amazena a soma dos notas
$soma_notas = 0;
// Loop que percorre o array inteiro
foreach ($alunos as $chaves => $valor) {
    // Verifica se o valor atual é numérico (para somar apenas as notas)
    if (is_numeric($valor)) {
        $soma_notas += $valor;
    }
}
// Mostrar a soma dos notas
echo "<br>";
print_r("Soma de Notas: " . $soma_notas);
echo "<hr>";
?>
