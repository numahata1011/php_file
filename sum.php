<?php
// 1〜10 までを足した値を返す関数
function sum($max){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= $max; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }

    // $result を結果として返す
    return $result;
}

// 関数を実行する
echo sum(100);
echo "\n";

$string = "ABCDEF";
echo strlen($string);
echo "\n";

//=> I love PHP!
$string = "I love Ruby!";

// Ruby という文字列を　PHP に置換する
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;
echo "\n";

//=> 10 と表示される
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
echo "\n";

$array2 = array(2,5,9,7,3,1,8,6,4);

// 配列を昇順（小さい順）にソートする
asort($array2);
// print_rで表示する
print_r($array2);

// $array を降順(大きい順)にソートする
arsort($array2);
// print_rで表示する
print_r($array2);

//課題1
 function hand_over($passed){

    $sum = $passed * 2;

    return $sum;

 }
// 関数を実行する
echo hand_over(100);
echo "\n";

//課題2
 function add($a, $b){

     //処理したい内容
     $sum = $a + $b;

    return $sum;
 }

echo add(15, 25);
echo "\n";

//課題3

$array = array(1, 3, 5, 7, 9);

function sum_arr($arr){

    $result = $arr[0];

    for($i = 0; $i < count($arr); $i++ ){
        $result *= $arr[$i];
    }

    return $result;
}

echo sum_arr($array);
echo "\n";

//課題4

$array3 = array(7, 5, 3, 2, 1);

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     //$max_number = $arr[0];

     //foreach($arr as $a){
        $max_number = max($arr);
     //}

     return $max_number;
 }
echo max_array($array3);
echo "\n";

//課題5
//【strip_tags】文字列からHTMLタグを取り除く
$str = "<h1>HTMLから</h1></br><p>タグ取り除く関数、それが<b>strip_tags</b></p>";
echo strip_tags($str);
echo "\n";

//【array_push】指定した配列の末尾に要素を追加
$jojo3 = array('jotarou', 'Joseph');

foreach($jojo3 as $jojo3_all){
    echo $jojo3_all;
    echo "\n";
}

    echo "\n";

array_push($jojo3, 'kakyoin', 'Abdul', 'Polnareff' ,'Iggy');

foreach($jojo3 as $jojo3_all){
    echo $jojo3_all;
    echo "\n";
}

//【array_merge】指定した複数の配列を結合

// 配列を定義
$eva = array('ayanami', 'asuka', 'shinji');
$eva2 = array('mari', 'touji', 'kaworu');
 
//配列を結合
foreach(array_merge($eva,$eva2) as $eva_all){
    echo $eva_all;
    echo "\n";
}

/*【time,mktime,date】
『time』現在時刻をUnixエポックからの経過秒として返す
『mktime』引数に指定した日時からUnixタイムスタンプを取得
『date』日付、時刻、曜日を表示する
*/
date_default_timezone_set ('Asia/Tokyo');
$nowTime = time();//現在の時刻
echo date('Y年m月d日 H時m分s秒', $nowTime);
echo "\n";

$birthday = mktime( 0, 15, 32, 10, 11, 1981);
echo date('Y年m月d日 H時m分s秒', $birthday);
echo "\n";

?>