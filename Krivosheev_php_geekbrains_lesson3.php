<?php
    $i = 0;
    $n = 100;
    $ii = 0;
    $m = 10;

    function double_br() {echo "<br><hr><br>";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Домашнее задание. Урок 3.</h1><br><hr><br>";
        
        echo "<h2>Задание 1.</h2>";
        double_br();
        while ($i <= $n) {
            if ($i % 3 == 0) {
                echo "$i<br>";
                $i++;
            }
            else {
                $i++;
                continue;
            }
        }
        
        echo "<h2>Задание 2.</h2>";
        double_br();
        do {
            if ($ii == 0) {
                echo "$ii - это ноль.<br>";
                $ii++;
            }
            else if ($ii % 2 == 0) {
                echo "$ii - чётное число.<br>";
                $ii++;
            }
            else {
                echo "$ii - нечётное число.<br>";
                $ii++;
            }
        } while ($ii <= $m);
    ?>
    
    
    <?php // Тренировка по методичке и другим материалам.
        /*
        $n = 10;
        $i = 1;
        while (true) {
            echo "$i<br>";
            $i++;
            if ($i > $n)
                break;
        }
        
        do{
            echo "$i<br>";
            $i++;
        } while ($i <= $n);
        
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 == 0)
                continue;
            echo "$i<br>";
        }
        */
    ?>
</body>
</html>