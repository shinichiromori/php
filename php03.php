<?php
 
 $total = 0;
 echo $total;
 for ($i = 0; $i <= 100; $i++) {
  $total += $i;
 }
 echo $total;
 
 //課題１
 
 $name = 'shinichiro';

if ($name =='shinichiro') {
 echo "私はしんいちろうです。";
} else {
 echo "あなたの名前ではありません";
}

//課題２
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

//課題３
$fruits = array("Apple","Apricot","Banana","Grape",);

 echo count($fruits);
 for ($i = 0; $i < count($fruits); $i++) {
  echo $fruits[$i];
  echo "\n";
}


?>
