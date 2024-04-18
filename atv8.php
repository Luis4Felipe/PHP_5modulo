<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Litros de Tinta</title>
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
        <h2>Calculadora de Litros de Tinta</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="metros_quadrados">Tamanho da área a ser pintada (em metros quadrados):</label>
            <input type="number" id="metros_quadrados" name="metros_quadrados" step="any" required><br><br>
            
            <input type="submit" value="Calcular">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metros_quadrados = $_POST["metros_quadrados"];

            $cobertura_por_litro = 3;

            $litros_necessarios = ceil($metros_quadrados / $cobertura_por_litro);

            $tamanho_lata = 18;

            $latas_necessarias = ceil($litros_necessarios / $tamanho_lata);

            $preco_total = $latas_necessarias * 80;

            echo "<p>Quantidade de latas de tinta necessárias: $latas_necessarias</p>";
            echo "<p>Preço total: R$ $preco_total,00</p>";
        }
        ?>
    </div>
</body>
</html>
