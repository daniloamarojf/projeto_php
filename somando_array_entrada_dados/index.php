<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"><!--Define a codificação dos caracteres para suportar -->
    <title>Cadastro de Alunos</title> <!-- Título que aparece na aba de navegador -->
    <style>
        /* Define a fonte e o espaçamento do corpo da página */
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        /* Estiliza os campos de texto e números para ficarem mais legíveis */
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px; /* limita o tamanho máximo do campo */
        }
        /* Estiliza o botão de enviar (submit) */
        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h1>Cadastro de Alunos</h1> <!-- Título principal da página -->

<!-- Formulário que envia os dados para esta mesma página via metodo POST -->
 <form method="POST">
    <label>Nome do Aluno</label><br>
    <!-- Campo para digitar o nome, obrigatório (requerid) -->
    <input type="text" name="nome" requerid><br>

    <label>Nota 1:</label><br>
    <!-- Campo para digitar a nota 1, aceita números decimais, obrigatório  -->
    <input type="number" name="nota1" step="0.01" requerid><br>

    <label>Nota 2:</label><br>
    <input type="number" name="nota2" step="0.01" requerid><br>

    <label>Nota 3:</label><br>
    <input type="number" name="nota3" step="0.01" requerid><br>

    <label>Nota 4:</label><br>
    <input type="number" name="nota4" step="0.01" requerid><br>

    <!-- Botão para enviar o formulário -->
     <input type="submit" value="Cadastrar">
 </form>

 <?php
    // Verificar se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Cria um array associativo $aluno com os dados recebidos do formulário
        $aluno = [
            'nome' => $POST['nome'], // Pega o nome digitado pelo usuário
            'nota1' => (float) $_POST['nota1'], // Converta a nota 1 para número decimal
            'nota2' => (float) $_POST['nota2'], // Converta a nota 2 para número decimal
            'nota3' => (float) $_POST['nota3'], // Converta a nota 3 para número decimal
            'nota4' => (float) $_POST['nota4'], // Converta a nota 4 para número decimal

        ]
    }
 ?>
    
</body>
</html>
