<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Funcao-converter.php" method="post"> 
        <input type="text" name="nome"> <br>
        <input type="email" name="teste"><br>
        <input type="submit" value="Ok">
    </form>
    <?php 
    $nome = $_POST['nome'];
    $email = $_POST['teste'];

    echo "Olá , $nome,  Seu E-mail é: , $email "
    ?>
</body>
</html>