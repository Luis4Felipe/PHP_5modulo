<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
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
        <h2>Ordem Crescente</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="valorA">Valor A:</label>
            <input type="number" id="valorA" name="valorA" required><br><br>
            
            <label for="valorB">Valor B:</label>
            <input type="number" id="valorB" name="valorB" required><br><br>
            
            <input type="submit" value="Ordenar">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valorA = $_POST["valorA"];
            $valorB = $_POST["valorB"];
            
            if ($valorA == $valorB) {
                echo "<p>Números iguais: $valorA</p>";
            } else {
                if ($valorA < $valorB) {
                    echo "<p>$valorA; $valorB</p>";
                } else {
                    echo "<p>$valorB; $valorA</p>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
