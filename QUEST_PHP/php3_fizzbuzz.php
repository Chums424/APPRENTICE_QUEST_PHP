<?php

//ⅲ.[実装力][Level2]コードを書く手順を理解している
/*Fizz Buzz を解く。

数字を1から100まで順番に出力していき
●3の倍数の時「Fizz」
●5の倍数の時「Buzz」
●3かつ5の倍数の時「FizzBuzz」
を表示させます。

関数 fizz_buzz を定義し、実装する。

関数 fizz_buzz を呼び出すと、以下が出力される。
1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17, …
*/


//関数 fizz_buzz を定義する
function fizz_buzz() {

  //数字を1から100まで順番に出力する
  for ($i = 1; $i <=100; $i++) {

    //3かつ5の倍数の時「FizzBuzz」と出力する
    if ($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz, ";
    }

    //3の倍数の時「Fizz」と出力する
    elseif ($i % 3 == 0) {
      echo "Fizz, ";
    }
    
    //5の倍数の時「Buzz」と出力する
    elseif ($i % 5 == 0) {
      echo "Buzz, ";
    }

    //それ以外の場合
    else {
      echo $i . ", ";
    }
  }
}

//関数 fizz_buzz を呼び出す
fizz_buzz();

?>