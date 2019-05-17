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

$arr = [1,2,3,4,5];



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

$arr = ['a','b','c','d','e'];

    function rew($arr){

        $count = count($arr);
        $values = array_values($arr);
        $newArr = [];

        for($i = $count - 1; $i >=0; $i--){

            $newArr [] .= $arr[$i];
        }
        return $newArr;
    }



 var_dump(rew ($arr));

//var_dump($arr);
 //var_dump(array_values($arr)) ;


 //var_dump(rew($arr));



//



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



