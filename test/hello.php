<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hello</title>
  <link rel="stylesheet" href="">
</head>
<body>
<!-- 以下はphpで出力 -->

<?php
/*
ここから複数行用のコメント
ここまで*/

$kosuu = 10;
echo 'みかんが' . $kosuu . '個あります。<br>';
echo "みかんが{$kosuu}個あります。<br>";
echo 'みかんが$kosuu個あります。<br>';

$number = 10;
echo $number;
echo '<br>';
$number = 20;
echo $number;

$food = array('りんご,みかん,なし');
echo '<br>';
echo $food[0];
echo '<br>';
echo $food[2];
echo '<br>';
var_dump($food);
echo '<br>';

$food = array(

  'apple' => 'りんご',
  'orane' => 'みかん',
  'pear' => 'なし',

  );

echo "Hello! World.(php)\n"; // phpでHelloを表示
echo 'Hello! World.(php)\n'; // phpでHelloを表示
echo "Hello! World.(php)\n"; // phpでHelloを表示
echo "Hello! World.(php)\n"; // phpでHelloを表示

 ?>
 <!-- 以上はphpで出力-->
 <br>
 <!-- 以下はjavascriptで出力 -->
 <script>

 document.write("Hello! World.(javascript)");

 </script>
 <!-- 以上はjavascriptで出力 -->

</body>
</html>