<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nota1 = 10;
        $nota2 = 7;
        $nota3 = 8;

        $notafinal = ($nota1 + $nota2 + $nota3) / 3;

        echo "<h1 class='seila'>Média</h1>";

        if($notafinal > 10) {
            echo "<h3 class='seila laranjinha'>A nota $notafinal é inválida.</h3>";
        }
        elseif($notafinal >=5 and $notafinal <= 10) {
            echo "<h3 class='seila verdinho'>Aprovado! Nota: $notafinal</h3>";
        } else {
            echo "<h3 class='seila vermelinho'>Reprovado! Nota: $notafinal</h3>";
        }
    ?>
</body>
</html>