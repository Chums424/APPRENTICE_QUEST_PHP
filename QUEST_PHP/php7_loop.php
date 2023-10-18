<?php

//ⅶ.[PHP][Level1]繰り返し処理を行うことができる

/*1. 挨拶
100回 "こんにちは！" と出力する関数 hello を定義する*/

function hello() {
  for ($i = 0; $i < 100; $i++) {
    echo "こんにちは！<br>";
  }
}

hello();

echo "<br>";

/*2. 羊
眠れなくなったので羊の数を数えることにした。
羊の数 n が与えられ
羊が1匹 羊が2匹 羊が3匹 …
と、n 回羊の数えを出力する関数 sheep を定義する*/

function sheep($n) {
  for ($i = 1; $i <= $n; $i++) {
    echo "羊が{$i}匹<br>";
  }
}

sheep(3);

echo "<br>";

/*3. 総和
1 から 100 までの足し算の結果を出力する関数 sum_1_100 を定義する*/

function sum_1_100() {
  $result = 0;
  for ($i = 1; $i <= 100; $i++){
    $result += $i;
  }
  echo $result;
}

sum_1_100();

echo "<br>";

/*4. 総和
2つの整数 x と y が与えられ、
x から y までの足し算の結果を出力する関数 sum を定義する*/

function sum($x, $y) {
  $result = 0;
  for ($i = $x; $i <= $y; $i++) {
    $result += $i;
  }
  echo$result;
}

sum (10, 80);

echo "<br>";

/*5. フィボナッチ数列
家のお手伝いを毎日継続すると、継続日数 n 日に応じて、
その日にもらえるお小遣いの金額が増えていく。

お小遣いの金額は以下の条件に従ってもらうことができる。
f(0) = 0 円 f(1) = 1 円 f(n) = f(n-1) + f(n-2) 円 (n ≧ 2)

整数 n に対して、n 日間お手伝いを継続した時のお小遣いの金額を算出する関数 fibonacci を定義する*/

function fibonacci($n) {
  if ($n == 0) {
    return 0; //ベースケース：f(0) = 0 円
  } elseif ($n == 1) {
    return 1; //ベースケース：f(1) = 1 円
  } else {
    return fibonacci($n - 1) + fibonacci($n -2); //f(n) = f(n-1) + f(n-2) 円 (n ≧ 2)
    }
  }

echo fibonacci(0);
echo "<br>";
echo fibonacci(1);
echo "<br>";
echo fibonacci(2);
echo "<br>";
echo fibonacci(3);
echo "<br>";
echo fibonacci(4);
echo "<br>";
echo fibonacci(7);
echo "<br>";
echo fibonacci(30);

?>