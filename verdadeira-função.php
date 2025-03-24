<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar</title>
</head>
<body>
    <form action="verdadeira-função.php" method="post">
        <input type="text" name="n1">
        <input type="text" name="n2">
        <input type="submit">
    </form>
    <?php
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];

    function somar($num1, $num2){
        return $num1 + $num2;
    }

    $resultado = somar($num1,$num2);

    echo $resultado;
    ?>
</body>
</html>