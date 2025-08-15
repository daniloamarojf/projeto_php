<?php
// Inicia a sessão (sempre deve estar no topo da página antes de qualquer HTML)
session_start();

// Verificar se o nome já foi enviado pelo formulário
if (isset($_POST['nome'])) {
    // Armazena o nome enviado na sessão
    $_SESSION['nome'] = $_POST['nome'];
}
?>

<!-- Formulário simples para o usuário digitar o nome -->
 <form method="POST">
    <label>Digite seu nome:</label>
    <input type="text" name="nome">
    <button type="subimit">Enviar</button>
 </form>

 <?php
// Verifica se já existe um nome armazenado na sessão
if (isset($_SESSION['nome'])) {
    // Exibe uma mensagem com o armazenado
    echo "<p>Olá, " . $_SESSION['nome'] . "| Seja bem-vindo de volta.<p>.";
}
 ?>
