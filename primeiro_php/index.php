<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu primeiro PHP</title>
    <style>
        /* Estiliznd a página */
        body {
            font-family: Arial;
            background-color: #f0f0f0;
            text-align: center;
        }
        input, button {
            padding: 8px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao PHP</h1>

    <!--
        Formulário HTML
        - method="GET": evia os dados pela URL (ex: ?mensagem=text)
        - action="": significado que o formulário será enviado para a própria página
    -->
    <form method="GET" action="">
        <label>Digite sua mensagem:</label><br>

        <!-- Campo de texto onde o usuário digita -->
         <input type="text" name="mensagem" required>

         <!-- Botão para enviar -->
          <button type="submit">Enviar</button>
    </form>

    <p>
        <?php
            // Inicio de código PHP

            // Verifica se existe uma mensagem enviada pelo formulário
            // A variável $_GET['mensagem'] pega o valor enviado na url
            if (isset($_GET['mensagem'])) {

                //Armazena o que foi digitado na variável $mensagem
                // A função htmlspecialchars() serve para proteger contra códigos
                // maliciosos (evita que alguém envie HTML ou JavaScript)
                $mensagem = htmlspecialchars($_GET['mensagem']);

                // Exibe na tela a mensagem digitada pelo usuário
                echo "Você digitou: <strong>$mensagem</strong>";

            } else {
                // Se nenhuma mensagem foi enviada ainda, mostra essa frase padrão
                echo "Olá, mundo! Este é meu primeiro código em PHP.";
            }

            // Fim do código PHP
        ?>
    </p>
</body>
</html>
