<?php

//ⅵ.[PHP][Level1]条件分岐を使うことができる

/*1. 比較
2つの整数 x, y の大小を比較し、xとyの大小関係を出力する関数 greater を定義する*/

function greater($x, $y){
  if ($x >= -100 && $x <= 100 && $y >= -100 && $y <= 100) {
    if ($x > $y) {
      echo "x > y";
    } elseif ($x < $y) {
      echo "x < y";
    } else {
      echo "x == y";
    }
  } else {
    echo "x と y は -100 から 100 の範囲内で入力してください。";
  }
}

greater(5, 4);
echo "<br>";
greater(-50, -40);
echo "<br>";
greater(10, 10);
echo "<br>";
greater(120, 7);

echo "<br>";

/*2. 電車の料金
東京駅から新宿駅までJR山手線に乗って移動する。
12歳以上は大人料金で200円、6歳以上12歳未満はこども料金で100円、6歳未満は幼児で無料となる。
年齢に応じて東京駅から新宿駅までの料金を出力する関数 train_fare を定義する。*/

function train_fare($age) {
  if ($age >= 0 && $age <= 150) {
    if ($age >= 12) {
      echo 200;
    } elseif ($age >= 6) {
      echo 100;
    } else {
      echo 0;
    }
  } else {
    echo "年齢は 0 から 150 の範囲内で入力してください。";
  }
}

train_fare(12);
echo "<br>";
train_fare(6);
echo "<br>";
train_fare(5);
echo "<br>";
train_fare(153);

echo "<br>";

/*3. XOR
2つのブーリアン値 x と y が与えられ、x と y のうちどちらかが真なら true を出力し、
両方真もしくは両方偽なら false を出力する関数 xor を定義する*/

function custom_xor($x, $y) {
  if (($x && !$y) || (!$x && $y)) {
    echo "true";
  } else {
    echo "false";
  }
}

custom_xor(true, true);
echo "<br>";
custom_xor(true, false);
echo "<br>";
custom_xor(false, true);
echo "<br>";
custom_xor(false, false);

?>