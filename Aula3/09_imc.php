<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $peso = 68;
        $altura = 1.69;

        $imc = ($altura * $altura) / $peso;

        if($imc < 18.5) {
            echo "<h3 class='seila'>Abaixo do peso! IMC = $imc</h3>";
        } 
        elseif($imc < 25) {
            echo "<h3 class='seila'>Peso normal. IMC = $imc</h3>";
        } 
        elseif($imc < 30) {
            echo "<h3 class='seila'>Acima do peso! IMC = $imc</h3>";
        }
        elseif($imc < 35) {
            echo "<h3 class='seila'>Obseidade grau I! IMC = $imc</h3>";
        }
        elseif($imc < 41) {
            echo "<h3 class='seila'>Obseidade grau II! IMC = $imc</h3>";
        }
        else {
            echo "<h3 class='seila'>Obseidade grau III! IMC = $imc</h3>";
        }
    ?>
</body>
</html>