<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processando Mensagem</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <!-- Título da página -->
     <h1>Resultado</h1>

     <p>
        <?php
            // Verifica se o campo 'mensagem' foi enviado atrvés do formulário
            if (isset($_POST['mensagem'])) {
                // A função htmlspecialchars impede que o usuário envie códigos perigosos  (como scripts).
                // $_POST['mensagem'] é o valor enviado pelo formulário com médoto POST.
                $mensagem = htmlspecialchars($_POST['mensagem']);
                // Mostra a mensagem digitada pelo usuário
                echo "Você digitou: <strong>$mensagem</strong>";
            } else {
                // Se nada foi enviado ainda, mostra uma mensagem padrão
                echo "Nenhuma mensagem foi recebida.";
            }
        ?>
     </p>
    
     <!-- Link para voltar á pagina do formulário -->
      <a href="index.php">Voltar</a>
      
</body>
</html>
