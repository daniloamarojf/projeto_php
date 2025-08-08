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

    <div class="container">

    <p id="formulario2">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
            $operacao = $_POST['selecione'] ?? '';

            switch ($operacao) {
                case 'soma':
                    $resultado = $num1 + $num2;
                    $mensagem = "O resultado de <strong>$num1 + $num2 = $resultado</strong>";
                    break;

                case 'subtracao':
                    $resultado = $num1 - $num2;
                    $mensagem = "O resultado de <strong>$num1 - $num2 = $resultado</strong>";
                    break;

                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    $mensagem = "O resultado de <strong>$num1 x $num2 = $resultado</strong>";
                    break;

                case 'divisao':
                    if ($num2 == 0) {
                        $mensagem = "Erro: Divisão por zero não é permitida";
                    } else {
                        $resultado = $num1 / $num2;
                        $mensagem = "O resultado de <strong>$num1 ÷ $num2 = $resultado</strong>";
                    }
                    break;


            default: 
                $mensagem = "Nenhuma opção foi escolhida";
            }
            
        }
       
        echo "$mensagem<br><br>";

        ?>
        <a href="index.php">Voltar</a>

    </p>
    </div>
</main> 
</body>
</html>

