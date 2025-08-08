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
        <h1>Calculadora: Operadores Aritméticos</h1>
    </header>
        <div class="container">
            <form id="formulario" method="POST" action="processa.php">
                <label>Digite o primeiro número:</label><br>
                <input type="number" id="numero1" name="numero1" required><br>

                <label>Digite o segundo número:</label><br>
                <input type="number" id="numero2" name="numero2" required><br>

                <label>Escolha a operação</label><br>

                <select name="selecione" id="selecione">
                    <option value="">--Selecione--</option>
                    <option value="soma">Soma(+)</option>
                    <option value="subtracao">Subtração(-)</option>
                    <option value="multiplicacao">Multiplicação(x)</option>
                    <option value="divisao">Divisão(÷)</option>
                </select><br>
                <button>Calcular</button>

            </form>
        </div>
</main> 
</body>
</html>
