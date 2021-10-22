<?php
$a = "PHP";
$a .="カリキュラム";
$a .="勉強中";

echo $a; //PHPカリキュラム勉強中 出力
echo '<br>';

$b = "75";
$d = "80";
echo "点数は $b 点です。"; //点数は75点です。出力
echo '<br>';
echo "点数は $d 点です。"; //点数は80点です。 出力
echo '<br>';

$c = "募集中";
echo "アルバイト".$c; //アルバイト募集中 出力
echo '<br>';

$name = "芝山";
$name .= "幸大";
echo $name; //芝山幸大 出力
echo '<br>';

//課題1
$name01 = "shibayama ";
$neme02 = "kodai";
echo $name01.$neme02; //shibayamakodai 出力
echo '<br>';

//課題2
$name01 .= "PHP"; 
echo $name01.$neme02; //shibayamaPHPkodai 出力
echo '<br>';

//課題3
$e = "今";
$f = "PHP";
echo "こんにちは！ $e 私は $f を勉強しています。";//こんにちは！今私はPHPを勉強しています。出力

?>


