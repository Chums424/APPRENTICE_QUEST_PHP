<?php

//ⅳ.[PHP][Level1]関数を自作し使うことができる

/*1. Hello World
"Hello World" と標準出力（画面）に出力する関数 hello を定義する*/

function hello() {
  echo "Hello World";
}

hello();

echo "<br>";

/*2. 挨拶
名前を引数に受け取り、与えられた名前の挨拶メッセージを標準出力（画面）に出力する関数 greeting を定義する*/

function greeting($name) {
  echo "おはよう、" . $name . "！";
}

greeting('渡辺');

?>