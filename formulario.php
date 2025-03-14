<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <input type="text" name="nome">
        <input type="text" name="mensagem">
        <input type="submit">
    </form>
    <?php 
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    echo "seu nome $nome, sua mensagem $mensagem "
    ?>
</body>
</html>