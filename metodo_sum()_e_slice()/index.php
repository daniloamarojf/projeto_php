<?php
echo '<h2> 2 - Dois alunos com 4 notas </h2>';

$alunos = [
    [ 
        'nome' => 'Maria',
        'Nota1' => 10,
        'Nota1' => 9,
        'Nota1' => 8,
        'Nota1' => 10,
    ],
    [
        'nome' => 'João',
        'Nota1' => 7,
        'Nota1' => 8,
        'Nota1' => 6,
        'Nota1' => 9,   
    ]
];

// Percorre cada aluno no array
foreach ($alunos as $aluno) {
    // Captura o nome do aluno
    $nome = $aluno['nome'];

    // Extrai apenas as notas (ignorando a primeira chave, que é o 'nome')
    $notas = array_slice($aluno, 1); // retorna um array com as 4 notas

    // Soma todas as notas
    $soma_notas = array_sum($notas);

    // calcula a média ds notas
    $media = $soma_notas / count($notas);

    // Exibe os dados do aluno
    echo "<h3>Aluno: $nome</h3>";
    echo "Notas: " . implode(', ', $notas) . "<br>"; // junta as notas em uma string separadas por vírgula
    echo "Soma: $soma_notas<br>";

    // Exibe a media com 2 casas decimais, vírgula como separador decimal e ponto como separador de milhar
    echo "Média: " . number_format($media, 2, ',', '.') . "<hr";
}
?>
