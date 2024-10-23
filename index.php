<?php

// Практическая работа: Работа со строками в PHP 
// Задачи: 
// 1. Конкатенация строк: 
// Объявите две строки, объедините их в одну. 
// Подсказка: используйте оператор  .  для объединения переменных. 

$string1 = "Привет";
$string2 = "Мир!";
$concatenatedString = $string1. $string2;
echo $concatenatedString; // Output: ПриветМир!

// 2. Изменение регистра: 
// Преобразуйте строку в нижний и верхний регистры. 
// Подсказка: используйте  strtoupper()  и  strtolower() . 

$string = "Привет Мир!";
echo strtolower($string);
echo strtoupper($string);
echo "<br>3. Сравнение строк:<br>";

// 3. Сравнение строк: 
// Сравните две строки, учитывая и не учитывая регистр. 
// Подсказка: попробуйте операторы  == ,  ===  и функцию  strcasecmp() . 

$str1 = "27";
$str2 = 27;
if($str1 === $str2){
    echo "равны ===";
}else if($str1 == $str2) {
	echo "равны ==";
}else {
    echo "не равны";
}
if(strcasecmp($string1, $string2) == 0) {
    echo "<br/>равны без учёта регистра";
}else {
    echo "<br/>не равны без учёта регистра";
    }

// 4. Поиск подстроки: 
// Найдите позицию подстроки в строке. 
// Подсказка: используйте функцию  strpos() . 

$string = "Привет Мир!";
$substring = "Мир";
$position = strpos($string, $substring);
echo $position; // Output: 7


// 5. Замена подстроки: 
// Замените одно слово в строке на другое. 
// Подсказка: используйте  str_replace() . 

$string = "Привет Мир!";
$substring1 = "Привет";
$substring2 = "Миру";
$newString = str_replace($substring1, $substring2, $string);
echo $newString; // Output: Миру Мир!

// 6. Форматирование строки: 
// Отформатируйте строку с использованием переменных. 
// Подсказка: используйте функцию  sprintf()  с нужными спецификаторами. 

$name = "Andrey";
$age = 53;
$string = "My name is %s, I'm %d years old.";
$formattedString = sprintf($string, $name, $age);
echo $formattedString; // Output: My name is Andrey, I'm 53 years old.

// 7. Разделение строки: 
// Разделите строку по разделителю и объедините её обратно. 
// Подсказка: используйте  explode()  и  implode() .   

$string = "Привет\nМир!";
$array = explode("\n", $string);
$reversedString = implode(" ", $array);
echo $reversedString; // Output: Привет Мир!


// 8. Работа с многострочным текстом: 
// Преобразуйте многострочный текст в HTML-разметку с  <br> . Подсказка: используйте  nl2br() . 

$multiLineText = "Привет\nМир!";
$htmlText = nl2br($multiLineText);
echo $htmlText; // Output: Привет<br>Мир!

// Уровень 2: Усложненный 
// Задачи: 
// 1. Сложная конкатенация строк: 
// Объедините несколько строк и добавьте в них переменные в одном 
// выражении. 
// Подсказка: используйте оператор  .  для объединения строк с динамическими данными. 

$string1 = "Привет";
$string2 = "Мир!";
$name = "Andrey";
$age = 53;
$concatenatedString = "{$string1}{$string2} My name is {$name}, I'm {$age} years old.";
echo $concatenatedString; // Output: ПриветМир! My name is Andrey, I'm 53 years old.

// 2. Изменение регистра с условиями: 
// Преобразуйте строку так, чтобы каждое слово начиналось с заглавной 
// буквы. 
// Подсказка: используйте функции  ucwords()  и  strtolower() . 

$string = "hello world!";
$words = explode(" ", $string);
$capitalizedWords = array_map(function($word) {
    return ucfirst(strtolower($word));
}, $words);
$capitalizedString = implode(" ", $capitalizedWords);
echo $capitalizedString; // Output: Hello World!

// 3. Сравнение строк с учётом регистра и без: 
// Проверьте строки на полное совпадение и сравните их без учёта регистра. 
// Подсказка: используйте операторы  == ,  ===  и функцию  strcasecmp() . 

$str1 = "Hello";
$str2 = "hello";
if(strcasecmp($str1, $str2) === 0) {
    echo "равны ===";
} else {
    echo "не равны";
}

// 4. Замена подстроки с использованием массива: 
// Замените несколько слов в строке одновременно, используя массивы для поиска и замены. 
// Подсказка: примените  str_replace() , передавая массивы. 

$str="Волга красивая.
Дон прекрасный.
Енисей быстрый.
И все это прекрасные виды.";

$pattern=array();
$pattern[0]="красивая";
$pattern[1]="прекрасный";
$pattern[2]="быстрый";
$pattern[3]="виды";

$replacement=array();
$replacement[0]="реки";
$replacement[1]="реки";
$replacement[2]="реки";
$replacement[3]="реки";

echo str_replace($pattern,$replacement,$str);

// 5. Форматирование строки с числом: 
// Отформатируйте строку, включив в неё числовые значения и строки. 
// Подсказка: используйте функцию  sprintf()  с комбинацией  %s  и  %d . 

$number = 17;
$string = "Привет, Мир!";
$formattedString = sprintf("%d %s", $number, $string);
echo $formattedString; // Output: 17 Привет, Мир!


// 6. Разделение и объединение сложной строки: 
// Разделите строку с числовыми значениями по разделителю, суммируйте элементы и выведите результат. 
// Подсказка: используйте  explode()  и  array_sum() . 

$string = "235 157";
$numbers = explode(" ", $string);
$sum = array_sum($numbers);
echo $sum;

// 7. Создание случайной строки: 
// Напишите функцию, которая генерирует случайную строку из букв и цифр. 
// Подсказка: используйте массив символов и функцию  rand() . 

function generateRandomString($length) {
    $characters = '978314hbkjryt25uFJNJnqWklDGPZS';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString.= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
echo generateRandomString(10);

// 8. Проверка строки на палиндром: 
// Напишите функцию, которая проверяет, является ли строка палиндромом. Подсказка: используйте  strrev()  
// для переворота строки. 

function isPalindrome($string) {
    return $string === strrev($string);
}
echo isPalindrome("racecar"); // Output: true
echo isPalindrome("hello"); // Output: false

// ?>
