<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reforçar.php" method="post">
        <input type="text" name="num">
        <input type="submit">

        <?php 
        
        $num = $_POST['num'];

        $interger = (int) $num;

        echo"$interger"
        
        ?>
    </form>
</body>
</html>