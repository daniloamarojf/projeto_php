<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulários</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<!-- Título da página -->
    <h1>Envie sua mensagem</h1>

    <!--
        Formulário para o usuário digitar e enviar dados.
        - method="POST" indica que os dados serão enviados "por trás" (sem aparecer na URL).
        - action="processa.php" diz que os dados enviados para a página chamada processa.php
    -->
    <form method="POST" action="processa.php">

         <!-- TRxto explicando o que o usuário deve fazer -->
          <label>Digite sua mensagem:</label><br>

          <!--
            Campo de texto onde o usuário digita a mensagem.
            - name="mensagem" é o nome do campo, usado para recuperar o valor no PHP.
            - required significa que o campo é obrigatório
          -->
        <input type="text" name="mensagem" reuqried>

        <!-- Botão que envia o formulário -->
         <button type="submit">Enviar</button>
    </form>
    
</body>
</html>
