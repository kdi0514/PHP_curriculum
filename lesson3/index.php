<?php //php宣言
$num = 5; //$numに5を代入
$num = 10; //$numに上書きして10を代入
echo $num;

echo '<br>';

$num_01 = 10; //$num_01に10を代入
$num_01 = $num_01 + 5; //10+5を$num_01に代入
$num_01 ++; //16を出力
echo $num_01; //$num_01を出力
echo '<br>';

$num_02 = 100; //$num_02に100を代入
$num_02 += 50; //$num_02に100＋50を代入
echo $num_02; //150を出力
echo '<br>';

$num_03 = 50; //$num_03に50を代入
$num_03 -= 25; //$num_03に50-25を代入 $num_03 = $num_03 - 25;
echo $num_03; //25を出力
echo '<br>';

$num_04 = 80;
$num_04 *= 4; //$num_04に80*4を代入 $num_04 = $num_04*4;
echo $num_04; //320を出力
echo'<br>';

$num_05 =50;
$num_05 /= 5; //$num_05に50/5を代入 $num_05 = $num_05 / 5;
echo $num_05; //10を出力
echo '<br>';


$hp = 2000;
$damage = 1000;

$hp = $hp-$damage;//2000-1000を$hpに代入

echo $hp."\n"; //1000を出力


$num_01 = 10; //$num_01に10を代入
$num_01 = $num_01 + 5; //10+5を$num_01に代入
$num_01 ++; //16を出力
echo $num_01."\n"; //$num_01を出力

$num_02 = 100; //$num_02に100を代入
$num_02 += 50; //$num_02に100＋50を代入
echo $num_02."\n"; //150を出力


?>