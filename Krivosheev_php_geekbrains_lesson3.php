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

        echo "<h2>Задание 3.</h2>";
        double_br();
        $cities = array(
                        'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
                        'Ленинградская область' => array('Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт'),
                        'Рязанская область' => array('Рязань', 'Михайлов', 'Скопин', 'Сараи', 'Касимов', 'Сасово')
        );
        //print_r($cities);
        foreach ($cities as $item => $citiesArray){
            echo "$item:<br>";
            $value = implode(', ',$citiesArray);
            echo "$value.<br>";
        }

        echo "<h2>Задание 4.</h2>";
        double_br();
        $translit = array (
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'yo',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'j',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'ph',
            'х' => 'kh',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shh',
            'ь' => "\"",
            'ы' => 'y',
            'ъ' => '\'',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ё' => 'Eo',
            'Ж' => 'Zh',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'J',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'Ph',
            'Х' => 'Kh',
            'Ц' => 'C',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Shh',
            'Ь' => "\"",
            'Ы' => 'Y',
            'Ъ' => '\'',
            'Э' => 'E',
            'Ю' => 'Yu',
            'Я' => 'Ya',
        );
        function translit($string, $translitor){
            return strtr ($string, $translitor);
        }  
        echo $str = "Всем привет! Съездим на море отдохнуть?";
        echo "<br>";
        echo translit($str, $translit);

        echo "<h2>Задание 5.</h2>";
        double_br();
        function replaceStr($str) {
            return $str = str_replace (" ", "_", $str);
        }
        echo $stringReplace = "replace spacing";
        echo "<br>";
        echo replaceStr($stringReplace);

        echo "<h2>Задание 6.</h2>";
        double_br();

        $menu = array (
            array ('link' => 'Главная', 'href' => '#'),
            array ('link' => 'Каталог', 'href' => '#'),
            array ('link' => 'Условия', 'href' => '#'),
            array ('link' => 'Контакты', 'href' => '#')
        );
        echo "<ul>";
        foreach ($menu as $item)
            echo "<li><a href = '{$item [href]}'>{$item [link]}</a></li>";
        echo "</ul>";    
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