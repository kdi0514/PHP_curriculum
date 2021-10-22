<?php //php宣言 ターミナル上での出力
$plus = 1 + 1;
$minus = 3 - 1;
$time = 1 * 1;
$divi = 1 / 1;
$amari = 3 % 2;


echo $plus."\n";
echo $minus."\n";
echo $time."\n";
echo $divi."\n";
echo $amari."\n";

$a = 10;
$b = 5;

echo $a + $b."\n";
echo $a - $b."\n";
echo $a * $b."\n";
echo $a / $b."\n";


?>


<?php //php宣言 ブラウザ上での出力
$plus = 1 + 1; //plusに1＋1を代入 plus 足し算
$minus = 3 - 1; //minusに3-1を代入 minus 引き算
$time = 1 * 1; //timeに1*1を代入 time 掛け算
$divi = 1 / 1; //diviに1/1を代入 divison 割り算
$amari =3 % 2; //amariに3％2を代入 １が出力される


echo $plus; //plusを出力
echo '<br>'; //改行 
echo $minus; //minusを出力
echo '<br>'; //改行
echo $time; //timeを出力
echo '<br>'; //改行
echo $divi; //diviを出力
echo '<br>'; //改行
echo $amari; //amariを出力


$a = 10;
$b = 5;

echo $a + $b; //15を出力
echo '<br>';
echo $a - $b; //5を出力
echo '<br>';
echo $a * $b; //50を出力
echo '<br>';
echo $a / $b; //2を出力




 /*2021/10/21 18:25
作成芝山幸大 
改行について 
."\n"はターミナル上でなら改行される。'<br>'はブラウザ上でなら改行される。

↓上のコードのターミナル上での出力結果↓

2
2
1
1

2<br>2<br>1<br>1

*/



?>

