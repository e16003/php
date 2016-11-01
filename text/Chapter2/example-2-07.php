<?php
$price = 5; $tax = 0.075;
printf                   //書式付出力
('The dish costs
 $%.2f',                 //フォーマット文字列
  $price * (1 + $tax)); //値

?>