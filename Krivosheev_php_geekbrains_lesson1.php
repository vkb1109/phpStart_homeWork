<?php
    $titleSite = "Год текущий";
    $yearNow = date ('Y');
    $headSite = "Сегодня $yearNow год на дворе.";
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
</body>
</html>