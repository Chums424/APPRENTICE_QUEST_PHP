<?php

//Skill Doc - ⅲ.[実装力][Level2]コードを書く手順を理解している
//YouTube：コードを書く基礎　四角形の面積を求める

//1. intval関数を用いて、文字列から数値（整数型）に変換する
//2. xとyを掛け合わせて面積を計算する

function area($x, $y){
  $x = intval($x);
  $y = intval($y);
  $result = $x * $y;
  return $result;
}

echo area('8','7');
echo "<br>";
echo area('10','10');

?>