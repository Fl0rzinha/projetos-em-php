<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nota = 9;

        echo "<h1 class='seila'>Notas</h1>";

        if($nota > 10) {
            echo "<h3 class='seila laranjinha'>A nota $nota é inválida.</h3>";
        }
        elseif($nota >=5 and $nota <= 10) {
            echo "<h3 class='seila verdinho'>Aprovado! Nota: $nota</h3>";
        } else {
            echo "<h3 class='seila vermelinho'>Reprovado! Nota: $nota</h3>";
        }
    ?>
</body>
</html>