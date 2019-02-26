<?php

$a = 6;
$b = 3;

function double_br() {echo "<br><hr><br>";}

function sum ($x, $y){
    return $x + $y;
}

function multiplication($x, $y){
    return $x * $y;
}

function subtraction($x, $y){
    return $x - $y;
}

function division($x, $y){
    return $x / $y;
}

function mathOperation ($arg1, $arg2, $operation){
    switch ($operation){
        case "Сумма":
            $result = "Сумма: " . sum($arg1, $arg2);
            break;
        case "Разность":
            $result = "Разность: " . subtraction($arg1, $arg2);
            break;
        case "Произведение":
            $result = "Произведение: " . multiplication($arg1, $arg2);
            break;
        case "Частное":
            $result = "Частное: " . division($arg1, $arg2);
            break;
        default:
            echo "Неправильно задано арифметическое действие. Возможна опечатка!";
    }
    return $result;
}

function power($val, $pow){
    if ($pow == 0){
        return 1;
    }
    if ($pow < 0){
        return power(1 / $val, -$pow);
    }
    return $val * power($val, $pow - 1);
}

function timeNow(){
    $hours = date('G');
    $minutes = date('i');
    if ($hours == '0' || ($hours > '4' && $hours < '21'))
        $hoursString = " часов";
    else if ($hours == '1' || $hours == '21')
        $hoursString = " час";
    else $hoursString = " часа";
    if ($minutes == '0' || ($minutes > 4 && $minutes < 21) || ($minutes > 24 && $minutes < 31)  || ($minutes > 34 && $minutes < 41) || ($minutes > 44 && $minutes < 51) || ($minutes > 54 && $minutes < 61))
        $minutesString = " минут";
    else if ($minutes == '1' || $minutes == '21' || $minutes == '31' || $minutes == '41' || $minutes == '51')
        $minutesString = " минута";
    else $minutesString = " минуты";
    return $timeString = "Сейчас " . $hours . $hoursString . " " . $minutes . $minutesString;
}

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
        echo "Сумма: " . sum($a, $b) . ";<br>";
        echo "Разность: " . subtraction($a, $b) . ";<br>";
        echo "Произведение: " . multiplication($a, $b) . ";<br>";
        echo "Частное: " . division($a, $b) . ";<br>";
        
        double_br();     
        echo "<h1>Задание 4.</h1>";
        echo mathOperation($a, $b, 'Произведение');

        double_br();     
        echo "<h1>Задание 5.</h1>";
        $lesson2 = file_get_contents('template.html');
        $yearNow = date ('Y');
        $lesson2 = str_replace("Подвал", $yearNow, $lesson2);
        echo $lesson2;

        double_br();     
        echo "<h1>Задание 6.</h1>";
        echo power(2, 3);
        
        double_br();     
        echo "<h1>Задание 7.</h1>";
        echo timeNow();
    ?>


</body>
</html>