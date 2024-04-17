<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Fatorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        input[type="number"] {
            padding: 8px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cálculo Fatorial</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="numero">Digite um número:</label>
            <input type="number" id="numero" name="numero" required><br><br>
            
            <input type="submit" value="Calcular Fatorial">
        </form>
        
        <?php
        // Verifica se o número foi enviado através do método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém o número enviado pelo formulário
            $numero = $_POST["numero"];
            
            // Função para calcular o fatorial
            function calcularFatorial($numero) {
                $fatorial = 1;
                for ($i = 2; $i <= $numero; $i++) {
                    $fatorial *= $i;
                }
                return $fatorial;
            }
            
            // Chamada da função e exibição do resultado
            $resultado = calcularFatorial($numero);
            echo "<p>O fatorial de $numero é: $resultado</p>";
        }
        ?>
    </div>
</body>
</html>
