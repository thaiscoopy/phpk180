<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    <?php
    if(isset($_GET['color'])){
        $color=$_GET['color'];
        echo "body{background:$color}";
    }
    ?>
</style>

<body>
    <a href="test.php?color=green">Green</a>
    <a href="test.php?color=red">Red</a>
    <a href="test.php?color=pink">Pink</a>
</body>

</html>