<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Concatenando o array com Implod()</h1>
    </header>
    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1 - Extract </h2>';

            // Criação de um array associativo com três elementos
            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5,
            ];

            // Exibe a conteúdo do array original demforma formatada
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            // array_filter() remove qualquer valor "falso" (como null, 0, string vazia, ect.)
            // implod('', ...) junta os valores do array resultante em uma única string, separados por espaços
            $registro = implode('', array_filter($array));

            // Exibe a string concatenada
            echo "<hr>";
            print_r("Valor extraído " . $registro);
            echo "<hr>";
        ?>
    </main>
</body>
</html>
