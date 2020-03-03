<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo "<h2>Sua nota da p1 = $n1</h2><br>";
    echo "<h2>Sua nota da p2 = $n2</h2><br>";
    $soma = ($n1+$n2) / 2;
    $final = ($soma >= 6) ? "APROVADO":"REPORVADO";    
    echo "Sua situação: $final"; 
    ?>
</body>
</html>