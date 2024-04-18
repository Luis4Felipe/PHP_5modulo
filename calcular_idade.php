<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        .resultado {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
    </style>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["ano_nascimento"]) && is_numeric($_POST["ano_nascimento"])) {
        $ano_atual = date("Y");
        
        $ano_nascimento = $_POST["ano_nascimento"];
        
        $idade = $ano_atual - $ano_nascimento;

        $idade_2025 = 2025 - $ano_nascimento;

        echo "<h2>Resultados:</h2>";
        echo "<p>A idade dessa pessoa é: $idade anos</p>";
        echo "<p>Esta pessoa terá $idade_2025 anos em 2025</p>";
    } else {
        echo "<p>Por favor, insira um ano de nascimento válido.</p>";
    }
}
?>

