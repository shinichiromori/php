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

//課題３ 再提出
  $fruits = array("Apple","Apricot","Banana","Grape",);
  foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
  }
  
//課題４  
  
 /* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 101;

 for($i = 1; $i < $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>
