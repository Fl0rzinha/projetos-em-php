<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nome = 'Gabriel Florindo';
        $idade = 16;

        echo "<h4 class='seila'>Nome: " . $nome . "</h4>";
        echo "<h4 class='seila'>Idade: " . $idade . "</h4>";
        echo "<h4 class='seila'>O meu nome é " . $nome . " e tenho " . $idade . " anos de idade</h4>";
    ?>
</body>
</html>