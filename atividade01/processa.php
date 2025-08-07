<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>


<body>

<main>
    <header>
        <h1>Resultado da Operação</h1>
    </header>

    <p>
        <?php

        $num1 = filter_input(INPUT_POST, 'numero1', FILTER_SANITIZE_INT);
        $num2 = filter_input(INPUT_POST, 'numero2', FILTER_SANITIZE_INT);
        $operacao = $_POST['selecione'] ?? '';

            switch ($operacao) {
                case 'soma':
                    $resultado = $num1 = $num2;
                    break;
            }
            echo "O resultado de $num1 + $num2 = &resultado"

        ?>
    </p>
</main> 
</body>
</html>

