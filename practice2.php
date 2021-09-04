<?php
//課題1
$name = "Yasuhito_Numahata";

if($name == "Yasuhito_Numahata") {

    echo "私は あなたの名前 です";
    echo "\n";

} else {

    echo "あなたの名前ではありません";
    echo "\n";

}
//課題2
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}

echo $total;
echo "\n";

//課題3
$fruits = array("melon", "Grape", "Muscat", "Mandarin_orange", "Strawberry");

foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

//課題4
/* for文の始めの値を定義する */

$start = 1;

/* for文の終わりの値を定義する */
$end = 101;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>