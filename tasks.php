<?php

//function inputProg ($int){
//
//        $intOst = $int %10;
//    $prog = 'Программист';
//    $progA = 'Программистa';
//    $progOv = 'Программистов';
//
//
//
//
//
//
//
//$arr = range(1,100);
//
//for($i = 0; $i < count($arr); $i++){
//
//    inputProg($arr[$i]);
//    echo"<br>";
//
//}


//1, 2, 3, 5, 8, 13,
//
//$counter = 0;
//$first = 1;
//$second = 1;
//echo $first."<br/>";
//echo $second."<br/>";
//while (0 < 500) {
//    $next = $first + $second;
//    echo $next."<br/>";
//    $counter++;
//    $second=$first;
//    $first=$next;
//}










//$counter = 0;
//$f = 1;
//$s = 1;
//
//
//while ($counter <= 10){
//    $n = $f + $s;
//    echo  $n."<br/>";
//
//    $counter++;
//    $s = $f;
//    $f = $n;
//
//
//}



//Занимательные задачи PHP 26 мая 2014 в 10:49
//Напишите функцию, которая добавляет правильные окончания существительным. Пример:
//0 яблок
//1 яблоко
//2 яблока
//3 яблока
//4 яблока
//5 яблок
//и так далее.
//
//Подсказка: функция должна принимать массив вариантов ('яблоко', 'яблока', 'яблок').
//
//P.S. Старайтесь, чтобы ваше решение было
//1. Изящным (не говнокод, а красивое решение)
//2. Быстрым (не выполняющим лишних действий)





//function apple($n,$arr) {
//    $nOst = $n % 10;
//
//    if ($nOst == 0 || $nOst > 4) {
//        return  "-" . $arr[2];
//    }
//    if ($nOst == 1) {
//        return   "-" . $arr[0];
//    }
//    if ($nOst >= 2 and $nOst <= 4 ) {
//        return   "-" . $arr[1];
//    }
//
//}
//    for ($i = 0; $i < 100;$i++){
//       $apples = array('яблоко', 'яблока', 'яблок');
//        echo $i . " " . apple($i,$apples) . "<br>";
//    }
//
//










//function apple($n){
//
//    $arr = ['яблоко', 'яблока', 'яблок'];
//
//    if ($n == 0){
//        return $n . "-". $arr[2];
//    }
//    if ($n == 1){
//        return $n . "-". $arr[0];
//    }
//    if ($n > 1 && $n < 5){
//        return $n . "-". $arr[1];
//    }
//    if ($n >= 5){
//        return $n . "-". $arr[2];
//    }
//
//};
//
//  for ($i = 0;$i < 30;$i++){
//     echo apple($i) ."<br>";
//  }




//Вывести на экран все счастливые билеты. Счастливый билет - это когда сумма первых трех цифр в номере билета равна сумме второй тройки цифр (номер шестизначный). Подсчитайте сколько счастливых билетов существует и какой % они составляют от общего числа билетов.





//$arrTickets = range(100000,999999);
//
////var_dump($arrTickets);
//$arrHappy = array();
//foreach($arrTickets as $elem){
//    $elem = (string)$elem;
//
//    $first = $elem[0] + $elem[1] + $elem[2];
//    $second = $elem[3] + $elem[4] + $elem[5];
//
//   if ($first == $second){
//       $arrHappy [].= $elem;
//   }
//   if($elem[0] == $elem[1] & $elem[1] == $elem[2] & $elem[2] == $elem[3] & $elem[3] == $elem[4] & $elem[4] == $elem[5]  ){
//       $arrHappy [].= $elem;
//   }
//}

//var_dump($arrHappy);
//$arr = [];
//
//for($i = 0.00001;$i < 0.00002; $i + 0.00001 ){
//    $number = 0.00001 ;
//    echo $number +=$i;
//
//  $arr [] .=   number_format( $number, 5, "", "");
//}
//var_dump($arr);
//
//foreach (range(100000, 999999) as $number) {
//    echo $number . "<br>";
//}

//
//Напишите PHP скрипт, который будет выводить на экран свой исходный код. То есть: когда мы обращаемся к этому скрипту в браузере - на экран вываливается код этого скрипта.

//function showScript() {
//
//    // echo "function  showScript()" . "<br>" ."{
//    //echo "\function  showScript()\" . \"<br>\" .\"{ \";
//
//    echo 'function  showScript() {
//     echo "function  showScript()
//
//    }';
//}
//
////showScript();
// var_dump($_SERVER['PHP_SELF']);


//Напишите функцию, которая будет переставлять элементы массива в обратном порядке (аналог функции array_reverse в
// PHP.).





//    function rew($arr){
////Берем длинну массива
//        $len_array = count($arr);
////Берем ключи массива
//        $keys = array_keys($arr);
////Берем значения массива
//        $values = array_values($arr);
////Массив где будут новые значения
//        $new_values = array();
////Переворачиваем массив
//        for($i = $len_array-1; $i >= 0; $i--){
//            $new_values [] = $values[$i];
//        }
////Возвращаем
//        return array_combine($keys, $new_values);
//    }
//

//
//    function rew($arr){
//
//        $count = count($arr);
//        $values = array_values($arr);
//        $newArr = [];
//
//        for($i = $count - 1; $i >=0; $i--){
//
//            $newArr [] .= $arr[$i];
//        }
//        return $newArr;
//    }
//
// var_dump(rew ($arr));
//var_dump($arr);
 //var_dump(array_values($arr)) ;
 //var_dump(rew($arr));

//$arr



   // function reversMy($arr) {
//    $values = array_values($arr); //достаем зачения массива
//    $keys = array_keys($arr);// достаем ключи массива
//    $newValues = array();
//    $newKeys = array();
//
//    if (is_int($keys[0])) {//проверка на число в ключе
//        for ($i = count($arr) - 1; $i >= 0; $i--) {
//          $newValues [] .= $arr[$i];
//        }
//        return $newValues; // возврат числового масива
//    } else {
//
//        for ($i = count($arr) - 1; $i >= 0; $i--) {
//            $newValues [] .= $values[$i];
//            $newKeys [] .= $keys[$i];
//        }
//        return array_combine($newKeys, $newValues);
//
//    }
//}
//$arr = [ 'a'=>'a','b'=>'b','c'=>'c','d'=> 'd','e'=>'e'];
////$arr = [1,2,3,4,5,6,7];
// var_dump(reversMy($arr));

//var_dump($arr);




function countMy($arr){
    $count = 0;
    foreach($arr as $elem){
        $count++;
    }
    echo $count;
}

//countMy($arr);


/// функия count без  count
//$arr = [1,2,3,4,5];
//
//function countMy($arr){
//    $cnt = 0;
//    foreach($arr as $elem){
//        $cnt++;
//
//
//
//    }
//
//echo $cnt;
//
//}
//
//
//countMy($arr);

//// факториал рекурсия
//function fac($n){
//    if ($n == 1){
//        return $n;
//    }else{
//        return $n * fac($n-1);
//    }
//}
////факториал циклом
// function fact ($n){
//
//    $result = 1;
//    for ($i=1;$i <= $n;$i++){
//
//        $result *=$i;
//    }
//  return $result;
// }
//
//
//
//
// echo fact(5);


//Дана строка. Удалите из нее третий пробел. Пример: строка '12 34 56 78' станет '12 34 5678'.
//echo gmp_fact(10); // функция родная;
//
//$str = '12 34 56 78';
//
//
//$str = explode( " ",$str);
//$str = $str[0]." ".$str[1]." ".$str[2].$str[3];
//echo $str;


//Дано число. Разложите его на простые множители.
// Пример: 12 - это 2 * 2 * 3.


//простое чило или нет простое число которое делится без остатка на себя и 1;

//$n = 12;
//$rasl = array();
//for ($i=2;$i<=$n;$i++) {
//    if (($n % $i) == 0) {
//        $rasl[] = $i;
//        $n /= $i;
//        $i--;
//        if ($n<2) break;
//    }
//}
//echo implode(' * ', $rasl);


//
//function simpInt($n) {
//    $arr = array();
//
//
//    for ($i = 2; $i < $n; $i++) {
//        if ($n % $i == 0) {
//            $arr [] .= $i;
//        }
//    } if ($arr){
//      return $arr;
//
//    }else {
//        return $arr;
//    }
//}





//echo ($rasl);

//var_dump ($arr) ;


//1. Поиск и сортировка
//Дано массив целых чисел $a, отсортированный по возрастанию и некое число $b.
//Написать функцию searchInArray($a, $b), которая максимально быстро определит есть ли в массиве искомый элемент и
//вернет TRUE либо FALSE .

//Код

//$a = array(0,1,2,3,4,5,6,7,8,9);
//
//function searchInArray($a,$b){
//
//   for($i = 0; $i < count($a);$i++){
//
//       if ($a[$i] == $b){
//           return true; break;
//       }
//
//}}
//
//var_dump(searchInArray($a,15));


//Дано: ассоциативный массив. Написать функцию arrayReverseKeys($a), которая перевернет ключи этого массива, модифицировав исходный массив, используя минимальное количество циклов
////Пример:
////$a = array( ‘a’ => ‘apple’, ‘b’ => ‘banana’, ‘c’ => ‘cherry’);
////Результат, ключи идут в обратном порядке:
////$a = array( ‘c’ => ‘apple’, ‘b’ => ‘banana’, ‘a’ => ‘cherry’);
///
//$a = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'cherry');
//
//
//
// function checkBrackets($arr){
//    $count = count($arr);
//    $values = array_values($arr);
//    $keys = array_keys($arr);
//    $revValues = [];
//
//
//
//    for($i = $count -1 ; $i >= 0;$i--){
//
//        $revValues[] .=$values[$i];
//    }
//
//     return array_combine($keys, $revValues);
//
//}
//
// var_dump(checkBrackets($a));


//$a = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'cherry');
////var_dump($a);
//arrayReverseKeys($a);
//function arrayReverseKeys($a) {
//    $a = array_reverse($a);
//    foreach ($a as $k=>$v)
//    { echo $k .'=>'. $v .' '; }
//}




//Написать свой варинт функции strrev(), не используя стандартные функции вроде strrev()
//Пример:
//Дано $s=‘Hello!’;
//Функция myStrRev($s) возвращает ‘!olleH’ и модифицирует свой аргумен

//$str='Hello!! vbfb f verfev';
//
//
//     function   myStrRev($s){
//         $count =  mb_strlen($s);
//         $nS = '';
//         for($i = $count -1; $i >= 0;$i--){
//
//             $nS .= $s[$i];
//         }
//
//         return $nS;
//        }
//
//
//        echo myStrRev($str);

/// strlen без strlen
//$str = 'ycyuv';
//$count = 0;
//for ($i = 0;$i < 100;$i++){
//
//    if(!empty($str[$i])){
//
//        $count++;
//
//
//  }
//
//}
//echo $count;



//добавление к числу 0  спереди то 6 знаков


//function addZero ($int){
//
//    if (strlen($int) < 6 ) {
//        echo str_pad($int, 6, 0, STR_PAD_LEFT);
//    } else {
//
//        return  $int;
//    }
//
//}

//addZero(1234);
//
//for ($i = 1;$i < 999999;$i++){
//
//    echo addZero($i) . "<br>";
//

// добавляет 0 к строке слева самописная
//function myzero ($int){
//     $count = strlen($int);
//     $zero = null;
//
//    if( $count < 6){
//
//        for($i = 0;$i < 6 - $count ;$i++){
//
//            $zero .= 0;
//
//        }
//
//        $zero .=$int;
//
//        return $zero;
//    }
//
//}
//
// $n = myzero(123) ;
//
//
//var_dump($n);

//В сценарии php-1-02.php создайте переменные $num1, $num2, присвойте им значения 25.464 и 321 соответственно. Объявите константу $const1 со значением 312. Cоздайте переменную $num3 со значением 8, установите тип integer для этой переменной, используя функцию settype. В окне обозревателя для каждой переменной выведите информацию о ее типе в формате:

$num1  = 24.464;
$num2  = 312;

//cons(const1:312);

define('const1',312);
$num3 = 8;
settype($num3,'integer' );


echo 'VariableName: $num1 - VariableType:' . gettype ($num1) . "<hr><br>";
echo 'VariableName: $num2 - VariableType:' . gettype ($num2) . "<hr><br>";
echo 'VariableName: const1 - VariableType:' . gettype (const1) . "<hr><br>";
echo 'VariableName: $num3 - VariableType:' . gettype ($num3) . "<hr><br>";



