<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números</title>
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
        <h2>Verificador de Números</h2>
        <form method="post">
            <label for="num">Digite um número:</label><br>
            <input type="text" id="num" name="num"><br>
            <input type="submit" value="Verificar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['num'])) {
                $num = $_POST['num'];        

                if (is_numeric($num)) {
                    if ($num > 0) {
                        echo "<p>O número $num é positivo.</p>";
                    } elseif ($num < 0) {
                        echo "<p>O número $num é negativo.</p>";
                    }
                } else {
                    echo "<p>O caractere digitado não é um número!</p>";
                }
            } else {
                echo "<p>O número é igual a zero.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
