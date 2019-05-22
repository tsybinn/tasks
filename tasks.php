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


function countMy($arr) {
    $count = 0;
    foreach ($arr as $elem) {
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

//-------------
//Дано число. Разложите его на простые множители.
// Пример: 12 - это 2 * 2 * 3.


//простое чило или нет простое число которое делится без остатка на себя и 1;
//..НЕ РЕШЕНО!!!!
////$n = 12;
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
//-------------------

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

//$num1  = 24.464;
//$num2  = 312;
//
////cons(const1:312);
//
//define('const1',312);
//$num3 = 8;
//settype($num3,'integer' );
//
//
//echo 'VariableName: $num1 - VariableType:' . gettype ($num1) . "<hr><br>";
//echo 'VariableName: $num2 - VariableType:' . gettype ($num2) . "<hr><br>";
//echo 'VariableName: const1 - VariableType:' . gettype (const1) . "<hr><br>";
//echo 'VariableName: $num3 - VariableType:' . gettype ($num3) . "<hr><br>";


//header('Content-Type: text/plain');
//echo "function arr('$arr'){
//     for($i = 0;$i < 12; $i++)
//
//}";

/// функцция выводит сама себя;
//    function inputMy(){
//        header('Content-Type: text/plain');
//
//        print_r("
//        function inputMy (){
//            header('Content-Type: text/plain');
//             print_r(\"function inputMy ()\");
//         }");}
//
//
//
//
//    inputMy();

//Создайте сценарий php-1-03.php, который для чисел 518 и 37 находит
//наибольший общий делитель и выводит в строке обозревателя сообщение вида
//"Наибольший общий делитель чисел 518 и 37 равен Result.", где Result - наибольший
//общий
//делитель заданных чисел.


function divider($n, $b) {

    $divN = [];
    $divB = [];
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $divN[] .= $i;
        }
    }
    for ($g = 2; $g < $b; $g++) {
        if ($b % $g == 0) {
            $divB[] .= $g;
        }
    }

    var_dump($divN);
    var_dump($divB);

}

//var_dump( $divid = array_intersect($divN,$divB));
//        foreach ($divid as $elem){
//
//            echo $result  =  $elem ;
//        }

//}
// divider(420,990);

//echo 10%7;

//for($i = 2; $i < 10;$i++){
//
//    if (10 % $i !== 0){
//        echo 10 % $i, "<br>";
//    }
//
//
//
//}

//$a=1952;
//for ($i=1; $i<=$a; $i++){
//
//
//        $res = $a % $i;
//
//        echo " $a % $i = $res  <br>";
//
//
//    }

//---------------------------------------
//Создайте сценарий php-1-05.php, который в окне обозревателя выводит
// значение площади трапеции со сторонами length1,
//length2, length3 и length4. Если в ходе работы сценария возникли ошибки, в обозреватель должно быть выведено
//сообщение, имеющее следующий вид:

//Ошибка ErrorAction.
//ErrorCause.

//где ErrorAction - действие, вызвавшее ошибку, ErrorCause - причина ошибки.

// function trap ($length1,$length2,$length3,$length4){
//
//    $arr =[$length1,$length2,$length3,$length4]; //создаем  массив с пришедшими значениями
//    $error = [];// массив ошибок
//      for($i = 0;$i<3;$i++){// перебираем массив
//        if (!is_int($arr[$i]) && !is_float($arr[$i]) ){// проверка га целое и дробное число
//            $error [] .=   "ErrorAction:" . " " . $arr[$i] .' ---input not integer!!!---
//                <br> ErrorCause:input  integer  ';
//
//        }}
//     if($length3 != $length4){//проверка на равнобедренную трп=апецию
//         $error [] .=   "ErrorAction" . " " . $arr[$i] .' $length3 not equal $length4
//         <br> ErrorCause:input  integer  ';// если не так пишем в еррор
//     }
//        if (empty($error)){// если массив с ошибками пустой записываем переменные
//            //  в  формулу нахождения площади раввнобедренной трапеции
//           $pat1 =  ($length1 + $length2) / 2;
//           $pat2 =   pow($length3,2);
//           $pat3 = pow($length1 - $length2,2) + pow($length3,2) - pow($length4,2);
//           $pat4 = 2 * ($length1 - $length2);
//
//           $itog =  $pat2 - pow($pat3 / $pat4,2);
//
//
//           $squ = "S = ". ceil(sqrt($itog) * $pat1);
//
//
//            echo $squ;// выводим результат
//        }else{// если есть ошибки выводим
//            foreach($error as $elem){
//
//                echo "<p style='color: red'>$elem </p>" ;
//            }
//
//
//        }
//
// }
//
//trap(10,9,24,25);


//echo "<br>" . pow(4, 1/3);
//----------------------------------------

//В сценарии php-1-08.php, создайте индексируемый массив из 10 элементов типа integer,
// содержащий числа от -3 до 23. В созданном массиве замените нулями все положительные элементы,
// В окне обозревателя выведите исходный массив и массив,
// полученный после преобразования. В случае возникновения ошибок должно быть выведено сообщение:
//Ошибка ErrorAction.
//    ErrorCause.

//$arr = [];
//for ($i = 1; $i < 10; $i++) { //создаем массив
//    $arr [] .= mt_rand(-22, 23);
//}
//
//$arrNew = []; // новый массив
//echo "<table style=''>";
//echo "<tr>";
//foreach ($arr as $elem) { //перебираем и выволим массив со всеми числами
//    echo "<td style='border:1px solid black; width:20px; text-align: center;'>";
//    echo $elem . "<br>";
//    echo "</td>";
//    if ($elem < 0) { // если число меньше ноля пишем в новый массив елемент
//        $arrNew [] .= $elem;
//    } else {// если больше пишем 0
//        $arrNew [] .= 0;
//    }
//}
//echo "</tr>";
//echo "<tr>";
//foreach ($arrNew as $elem) { //выводим  новый массив
//    echo "<td style='border:1px solid black; width:20px; text-align: center;'>";
//    echo $elem . "<br>";
//}
////var_dump($arrNew);
//echo "</tr>";
//echo "</table>";


//------------------------
//0. В сценарии php-1-10.php создайте массив $sequence из 10 элементов типа int,
//используя явную и смещенную индексацию и подсчитайте произведение максимального и
//минимального элементов этого массива. В обозревателе выведите сообщение
//"Произведение максимального элемента массива MaxElement и минимального элемента массива
//MinValue равно Result.", где MaxElement - максимальный элемент массива, MinValue -
//инимальный элемент массива,
//Result - произведение максимального и минимального элементов массива.


//function minMax($n){

//    $arr = [];
//
//    for($i= 2;$i < $n;$i++){
//
//        $add = mt_rand(5, 20);
//
//
//
//
//        $arr[] .= $add ;
//            }


    //var_dump($arr);
// foreach($arr as $elem){
//     echo $elem ."-";
// }
//
//
//    $maxElement = max($arr);
//    $minValue = min($arr);
//    $result = $maxElement * $minValue;
//    return  "Произведение максимального элемента массива MaxElement: $maxElement и минимального элемента массива
//MinValue:$minValue  равно Result:$result";
//}
//
//
//
// echo minMax(10);
//
//
////echo range(5,100);
//-----------------------------------

//function triangle($length1,$length2) {
//
//    $arrPar = [$length1, $length2]; //массив с данными
//    $error = []; // МАССИВ С ОШИБКАМИ
//    for ($i = 0; $i < 2; $i++) {
//
//        if (!is_int($arrPar[$i]) && !is_float($arrPar[$i])) {// проверка гначисло
//            $error [] .= "<p style='color:red'>ErrorAction: input not number</p>// пишем в еррор
//                          <p>ErrorCause: input number</p>";
//        }
//        if ($arrPar[$i] == 0) {// проверка на ноль
//            $error [] .= "<p style='color:red'>ErrorAction: input 0</p>
//                          <p>ErrorCause: input number > 0 </p>";
//        }
//        $sumlength1 = $arrPar[$i] + $arrPar[$i];// поверка на равнобедренный
//        if ($sumlength1 < $length2) {
//            $error [] .= "<p style='color:red'>ErrorAction: input length2 noy correct</p>
//                          <p>ErrorCause: input length2 number as not big lengrh1 + length1  number > 0 </p>";
//        }
//    }
//    if (empty($error)) {// если пусто
//        $path1 = $length2 / 4;
//        $path2 = sqrt(4 * pow($length1, 2) - pow($length2, 2));
//        $square =  round($path1 * $path2,3);
//        echo "Площадь прямоугольника со сторонами $length1 и $length2 равна $square m<sup>2</sup>
//                    где $length1 и $length2 - длины сторон прямоугольника";
//        } else {
//        echo $error[0];
//    }
//}
//
//triangle(5,9);

//------------------------------------
//В сценарии php-1-11.php с использованием функции array создайте ассоциативный массив $people из 5 элементов. Ключами
//массива должны быть фамилии людей, а элементами - имена. В обозревателе выведите сообщение следующего вида:

//Key1 Value1
//.
//.
//.
//Key5 Value5
//где Key - ключ ассоциативного массива, а Value - значение элемента массива с индексом Key.
//В случае возникновения ошибки должно быть выведено сообщение вида:
//Ошибка ErrorAction.
//    ErrorCause.



$arr = array(
            'Tsybin'=>'Anatoliy',
            'Ivanov'=>'Dima',
            'Zlobin'=>'Vasy',
            'Dmitrov'=>'Anatoliy',
            'Laxin'=>'Roman'
            );





$k = 1;
$v = 1;
echo"<table style='text-align: center; border:1px solid red'>";

foreach($arr as  $key => $value){


    echo "<tr>";
        echo "<td style='font-size: 12px;'>" . "Key" . $k++ . "</td>";
        echo "<td style='font-size: 12px;'>" . "value" . $v++;
    echo "</tr>";

    echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";






   //echo  "<td>" .$key . " " . $value . "</td> ";



}


echo"</table>";
?>

