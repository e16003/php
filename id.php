<?php

$flg = true;
if($flg){
  echo '$flgはtrueです。';
} else {
  echo '$flgはfalseです。';
}

  echo "<br />\n";

$num = 15;
if($num > 10){
  echo '$numは10より大きいです。';
}else{
  echo '$numは10以下です。';
}

  echo "<br />\n";



  $name = '田中';
  if ($name == '山田'):
    ?>
    $nameは「山田」です。
    <?php elseif($name == '佐藤') : ?>
    $nameは「佐藤」です。
    <?php elseif($name == '田中') : ?>
    $nameは「田中」です。
  <?php else : ?>
    $nameはどれにもあてはまりませんでした。
  <?php endif; ?>