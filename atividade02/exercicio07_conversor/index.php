<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperatura</title>
</head>
<body>
    <header>
        <h1>Conversor de temperatura</h1>
    </header>
    
    <main>
        <section>
            <form method="POST" action="public/processa.php">
                <label>Como deseja fazer a conversão?</label>

                <select name="selecioneDe" id="selecioneDe">
                    <option value=""Selecione:></option>
                    <option value="celsius">Celcius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="kelvin">Kelvin</option>
                </select>
                
                <select name="selecionePara" id="selecionePara">
                    <option value=""Selecione:></option>
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="kelvin">Kelvin</option>
                </select><br><br>

                <label>Qual valor desaja converter?</label>
                <input type="number" id="numero" step="0.1" name="numero" required>

                <button type="submit">Converter</button>
            </form>
        </section>
    </main>
</body>
</html>
