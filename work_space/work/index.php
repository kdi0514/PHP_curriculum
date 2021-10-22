<?php
$num = 11;
$flg = true;

if ($num == 10){
echo "変数numは10"; //$numが10と等しければ、変数numは10 と出力
} else if ($num == 5){
    echo "変数numは5"; //$numが5と等しければ 変数numは5 と出力
} else{
    echo "該当なし"; // どれにも該当しない場合は、該当なし と出力
}


echo '<br>';

$age = 0;
if ($age >= 20){
    echo "大人"; //$ageが20以上なら 大人 と出力
}else if ($age == 0){
    echo "赤ちゃん"; //$ageが0なら 赤ちゃん と出力
    }else{
    echo "子供"; //どれにも該当しない場合は、子供 と出力

}

echo '<br>';

$age = 27;
$pref = "京都";
$job = "エンジニア";

if($age >= 20 && $age <= 30){
    echo "20代です。";
}

echo '<br>';

if($age >= 25 || $job == "エンジニア"){
    echo "彼は25歳以上か、エンジニアです";
}



?>
