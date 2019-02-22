<?php
    $titleSite = "Год текущий";
    $yearNow = date ('Y');
    $headSite = "Сегодня $yearNow год на дворе.";
    $a = 1;
    $b = 2
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php
        echo "<title>$titleSite</title>"
    ?>

</head>
<body>
    <?php
        echo "<h1>$headSite</h1>"    
    ?>
    <?php
        echo "<br><br>";
        echo "a = $a <br>";
        echo "b = $b <br>";
        echo "<br><br>";
        list ($a, $b) = array ($b, $a);
        echo 'list ($a, $b) = array ($b, $a)';
        echo "<br><br>";
        echo "Теперь a = $a, <br>";
        echo "а b = $b. <br>";
    ?>
</body>
</html>