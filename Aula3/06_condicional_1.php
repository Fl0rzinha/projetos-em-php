<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $idade = 9;

        echo "<h1 class='seila'>Condicionais</h1>";

        if($idade >= 18) {
            echo "<h3 class='seila'>Você tem $idade anos, então é maior de idade.</h3>";
        }
        else {
            echo "<h3 class='seila'>Você tem $idade anos, então não é maior de idade.</h3>";
        }
    ?>
</body>
</html>