<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar o Menor Número</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 200px;
            margin-top: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Encontrar o Menor Número</h2>
        <form method="post">
            <label for="num1">Insira o 1º número:</label><br>
            <input type="text" id="num1" name="num1"><br>

            <label for="num2">Insira o 2º número:</label><br>
            <input type="text" id="num2" name="num2"><br>

            <label for="num3">Insira o 3º número:</label><br>
            <input type="text" id="num3" name="num3"><br>

            <label for="num4">Insira o 4º número:</label><br>
            <input type="text" id="num4" name="num4"><br>

            <label for="num5">Insira o 5º número:</label><br>
            <input type="text" id="num5" name="num5"><br>

            <label for="num6">Insira o 6º número:</label><br>
            <input type="text" id="num6" name="num6"><br>

            <label for="num7">Insira o 7º número:</label><br>
            <input type="text" id="num7" name="num7"><br>

            <input type="submit" value="Verificar Valores">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numeros = array($_POST['num1'], $_POST['num2'], $_POST['num3'], 
            $_POST['num4'], $_POST['num5'], $_POST['num6'], $_POST['num7']);

            $menorNumero = $numeros[0];
            $menorPosicao = 0;

            for ($indice = 1; $indice < count($numeros); $indice++) {
                if ($numeros[$indice] < $menorNumero) {
                    $menorNumero = $numeros[$indice];
                    $menorPosicao = $indice;
                }
            }

            echo "<p>O menor número é: $menorNumero</p>";
            echo "<p>Está na posição: $menorPosicao</p>";
        }
        ?>
    </div>
</body>
</html>
