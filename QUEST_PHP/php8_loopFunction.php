<?php 

//ⅷ.[PHP][Level2]配列関数を使い繰り返し処理を行うことができる
/*繰り返し処理には複数のやり方があり、それぞれに向いている用途があります。
ここでは代表的な配列関数を取り上げます。
色々なループ処理の方法に慣れていきましょう。*/

/*1. foreach
従業員の名前がID順に配列で渡されるので、
IDと従業員の名前をセットにして出力する print_names 関数を定義する。
なお、foreach を使うようにする。*/

function print_names($names) {
  $id = 1; //初期ID
  foreach ($names as $name) {
    echo $id . '. ' . $name . "<br>";
    $id++;
  }
}

print_names(['上田', '田仲', '堀田']);

echo "<br>";

/*2. array_map
与えられた整数の配列の要素を2乗した配列を返す square 関数を定義する。
なお、array_map 関数を使うようにする。*/

function square($numbers) {
  $squared_numbers = array_map(function ($number) {
    return $number * $number;
  }, $numbers);
  return $squared_numbers;
}

$squared_numbers = square([5, 7, 10]);

print_r($squared_numbers);

echo "<br>";

/*3.array_filter
整数の配列から偶数を抽出した配列を返す関数 select_even_numbers を作成する。
なお、array_filter 関数を使うようにする。*/

function select_even_numbers($numbers) {

  // $numbers 配列から偶数のみを抽出する
  $even_numbers = array_filter($numbers, function($number) {
    
    // コールバック関数内で各要素を判定し、偶数の場合 true を返す
    return $number % 2 === 0;
  });
  return $even_numbers; 
}

$even_numbers = select_even_numbers([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

print_r($even_numbers);


?>
