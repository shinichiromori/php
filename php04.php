<?php
//課題1
function outputDouble($num){
$result = $num * 2;
echo $result;
}
 outputDouble(5);
 echo "\n";

//課題2
function f($a,$b){
 $result = $a + $b;
 echo $result;
}
f(1,2);
echo "\n";

//課題３
$arr=array(1,3,5,7,9);
echo array_product($arr)."\n";



//課題４
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }








 ?>