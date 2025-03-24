<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia 24-03</title>
</head>
<body>
    <form action="array3.php" method="post">
        <input type="text" name="nome">
        <input type="text" name="idade">
        <input type="submit">
    </form>
</body>
</html>


<?php 

$nome = $_POST['nome'];
$idade = $_POST['idade'];


echo" Olá $nome, legal sua idade é, $idade anos!";

?>