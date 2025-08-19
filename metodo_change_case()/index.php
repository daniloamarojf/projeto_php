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
        <h1>Mudando o case: array_change_key_case()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1 - Extract </h2>';

            // Criação de um array com chaves em cases variados
            $array = [
                'Nome' => 'Maria',
                'idade' => 40,
                'PESO' => 50.5
            ];

            // Exibe o array original
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            // Converte todas as chaves do array para minúscula (CASE_LOWER)
            $indice_minusculo = array_change_key_case($array, CASE_LOWER);

            // Exibe o array com chaves em minusculas
            echo "<pre>";
            echo "Índice Minusculo: <br>";
            print_r($indice_minusculo);
            echo "</pre>";

            //Converte todas as chaves do array para maiúsculas (CASE_UPPER)
            $indice_maiusculo =  array_change_key_case($array, CASE_UPPER);

            // Exibe o array com chaves em maiúsculas
            echo "<pre>";
            echo "Índice Maiúsculo: <br>";
            print_r($indice_maiusculo);
            echo "</pre>";
        ?>
    </main>
</body>
</html>
