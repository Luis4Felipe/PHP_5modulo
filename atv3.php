<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Soma</title>
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
        label {
            font-weight: bold;
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
        <h2>Calculadora de Soma</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="valor1">Valor 1:</label>
            <input type="number" id="valor1" name="valor1" required><br><br>
            
            <label for="valor2">Valor 2:</label>
            <input type="number" id="valor2" name="valor2" required><br><br>
            
            <input type="submit" value="Calcular Soma">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            
            function calcularSoma($valor1, $valor2) {
                $soma = $valor1 + $valor2;
                
                if ($valor1 == $valor2) {
                    $soma *= 3; 
                }
                
                return $soma;
            }
            
            $resultado = calcularSoma($valor1, $valor2);
            echo "<p>A soma dos valores é: $resultado</p>";
        }
        ?>
    </div>
</body>
</html>



