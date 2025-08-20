<?php
    session_start();

    // Inicializa o array de alunos na seção, se ainda não existir
    if (!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = [];
    }

    // Se o botão "Limpar Lista" dor clicado
    if (isset($_POST['limpar'])) {
        session_destroy();
        session_start(); // reinicia a sessão após destruir
        $_SESSION['alunos'] =[]; // reinicializa o array
    }

    // Se o formulario for enviado para adcionar aluno
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['limpar'])) {
        // Cria um novo aluno a partir dos dados enviados
        $novo_aluno = [
            'nome' => $_POST['nome'],
            'nota1' => (float) $_POST['nota1'],
            'nota2' => (float) $_POST['nota2'],
            'nota3' => (float) $_POST['nota3'],
            'nota4' => (float) $_POST['nota4'],
        ];

        // Adiciona á lista na sessão
        $_SESSION['aluno'][] = $novo_aluno;
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastronde Alunos (com Session)</title>
    <Style>
        body { font-family: Arial; margin: 40px; }
        input[type="text"], input[type="number"] {padding: 8px; margin: 5px 0; width: 100%; max-width: 300px; }
        input[type="submit"] { padding: 10px 20px; margin-top: 15px; }
        hr { margin: 30px 0; }
    </Style>
</head>
<body>

<h1>Cadastro de Alunos (com session)</h1>

<!-- Formulario para adicionar aluno -->
<form method="POST">
    <label>Nome do Aluno:</label><br>
    <input type="text" name="nome" required><br>

    <label>Nota 1:</label><br>
    <input type="number" name="nota1" step="0.01" requered><br>

    <label>Nota 2:</label><br>
    <input type="number" name="nota2" step="0.01" requered><br>

    <label>Nota 3:</label><br>
    <input type="number" name="nota3" step="0.01" requered><br>

    <label>Nota 4:</label><br>
    <input type="number" name="nota4" step="0.01" requered><br>

    <input type="submit" value="Adicionar Aluno">
</form>

<!-- Botão para limpar a lista -->
<form method="POST" stlyle="margin-top: 20px;">
    <input type="hidden" name="limpar" value="1">
    <input type="submit" value="Limpar Lista de Alunos">
</form>

<!-- Exibe a lista de alunos -->
<?php if (!empty($_SESSION['alunos'])): ?>
    <hr>
    <h2>Lista de Alunos Cadastrados</h2>
    <?php foreach ($_SESSION['alunos'] as $aluno): ?>
        <h3><?= htmlspecialchars($aluno['nome']) ?></h3>
        <ul>
            <li>Nota 1: <?= $aluno['Nota1'] ?></li>
            <li>Nota 2: <?= $aluno['Nota2'] ?></li>
            <li>Nota 3: <?= $aluno['Nota3'] ?></li>
            <li>Nota 4: <?= $aluno['Nota4'] ?></li>
            <?php
                $soma = $aluno['Nota1'] + ['Nota2'] + ['Nota3'] + ['Nota4'];
                $media = $soma / 4;
            ?>
            <li><strong>Soma:</strong> <?= $soma ?></li>
            <li><strong>Média:</strong> <?= number_format($média, 2, ',', '.') ?></li>
        </ul>
        <hr>
    <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>
