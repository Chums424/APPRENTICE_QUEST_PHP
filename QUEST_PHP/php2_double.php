<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  //ⅱ.[実装力][Levei1]コードを手元で動かすことができる
  //好きな数値を入力でき、その数値を2倍にして表示するプログラムを作成する

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $result = $number * 2;
    echo "２倍の数値です：" . $result;
  }
  ?>

  <form method="post" action="">
    <label>好きな数値を入力してください：</label>
    <input type="text" name="number">
    <input type="submit" value="数値を2倍にする">
  </form>

</body>
</html>