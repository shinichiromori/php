<?php
//課題1
function sum($max){
 $result =$max*2;
  return $result;
}
 echo sum(2);
 echo "\n";
 
//課題2
function f($a,$b){
 $result = $a + $b;
 return $result;
}
echo f(1,2);
echo "\n";

//課題3 再提出
function num($arr){
 $result = 1;
 foreach ($arr as $ar) {
 $result *=$ar;
}
 return $result;
}
echo num(array(1, 3, 5 ,7, 9));
echo "\n";

//課題４
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number <$a){
    $max_number = $a;
 }
 }
 return $max_number;
 }
 echo max_array(array(10,20,30,40,50));
 echo "\n";
 ?>
 