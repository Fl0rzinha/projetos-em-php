<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função :v</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo "<h1 class='seila'>Função de divisão</h1>";

        function dividir($num1, $num2) {
            $total = $num1 / $num2;

            echo "<h3 class='seila'>Resultado da divisão: $total</h3>";
        }

        dividir(5, 10);
    ?>
</body>
</html>