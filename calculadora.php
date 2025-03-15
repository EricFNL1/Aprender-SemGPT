<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php" method="post">
        <input type="text" name="n1" placeholder="Insira o primeiro Número: "><br>
        <input type="text" name="n2" placeholder="Insira o segundo Número: "><br>
        <input type="number" name="operacao" placeholder="Dígite a operação que deseja, 1 para somar, 2 para subtrair...">
        <input type="submit">
    </form>
    <?php 
    $n1 = (float) $_POST['n1'];
    $n2 = (float) $_POST['n2'];
    $calc = $_POST['operacao'];

    if($calc == 1){
      $soma = (float) $n1 + $n2;
        echo"A Soma é : $soma";
    }
    elseif($calc == 2){
        $subtrair = (float) $n1 - $n2;
        echo"A Subtração : $subtrair";
    }
    if($calc == 3){
        $mult = (float) $n1 * $n2;
        echo"A Multiplicação é : $mult";
    }
    elseif($calc == 4){
        $divisao = (float) $n1 / $n2;
        echo"A Divisão é : $divisao";
    }

    
    ?>
</body>
</html>