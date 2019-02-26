<?php

$a = 5;
$b = 3;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 2. Training.</title>
</head>
<body>
    
    <?php
        echo "<h1>Задание 1.</h1>";
        if ($a >= 0 && $b >= 0)
            echo $a - $b;
        else if ($a < 0 && $b < 0)
            echo $a * $b;
        else                           
            echo $a + $b;
        double_br();     
        echo "<h1>Задание 2.</h1>";
        switch($a){
            case 1: echo 1 . " ";
            case 2: echo 2 . " ";
            case 3: echo 3 . " ";
            case 4: echo 4 . " ";
            case 5: echo 5 . " ";
            case 6: echo 6 . " ";
            case 7: echo 7 . " ";
            case 8: echo 8 . " ";
            case 9: echo 9 . " ";
            case 10: echo 10 . " ";
            case 11: echo 11 . " ";
            case 12: echo 12 . " ";
            case 13: echo 13 . " ";
            case 14: echo 14 . " ";
            case 15: 
                echo 15 . " "; 
                break;
            default: echo "Значение a больше 15 или меньше 1.";
        }
        double_br();     
        echo "<h1>Задание 3.</h1>";
    ?>

    <?php
        $x = 42;
        $y = 5;
        $now = "night"; 
        $max = ($x > $y) ? $x : $y;
        $avg = average($x, $y);
        
        function compare_numbers ($x, $y){
        if ($x > $y)
            echo '$x больше $y';
        else if ($x < $y)
            echo '$x меньше $y';
        else
            echo '$x равен $y';
        }
        
        function double_br() {echo "<br><hr><br>";}

        function average($x, $y){
            return ($x + $y)/2;
        }

        function mult($a, $b = 1){
            return $a * $b;
        }
        function fibonacci($n, $prev1 = 1, $prev2 = 0){
            $current = $prev1 + $prev2;
            echo "$current";
            if ($n > 1) 
                fibonacci($n - 1, $current, $prev1);
        }
        

        compare_numbers($x, $y);

        double_br();

        switch ($now){
            case "night":
                echo "Доброй ночи!";
                break;
            case "morning":
                echo "Доброе утро!";
                break;
            case "evening":
                echo "Добрый вечер!";
                break;
            default:
                echo "Добрый день!";
                break;
        }
        
        double_br();
                
        echo $max;
        //echo 'Здесь должно выводиться значение переменной $max';

        double_br();

        echo $avg;

        double_br();

        echo mult(8, 2);
        
        double_br();

        fibonacci(15);
    ?>

</body>
</html>