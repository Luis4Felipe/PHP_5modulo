




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["peso"]) && isset($_POST["altura"]) && is_numeric($_POST["peso"]) && is_numeric($_POST["altura"]) && $_POST["peso"] > 0 && $_POST["altura"] > 0) {

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);

        if ($imc < 18.5) {
            $categoria = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $categoria = "Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            $categoria = "Acima do peso";
        } else {
            $categoria = "Obesidade";
        }

        echo "<h2>Resultado do IMC:</h2>";
        echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
        echo "<p>Você está na categoria: $categoria</p>";
    } else {
        echo "<p>Por favor, insira um peso e altura válidos.</p>";
    }
}
?>
