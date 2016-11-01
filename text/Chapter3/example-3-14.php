<?php

$first_name = 'test';
$last_name = 'test2';

//strcasecmp関数は引数の2つの文字列が等しい場合は0を返す、phpは0をfalseとみるので。それの否定（1）はtrueになる


if (! strcasecmp($first_name,$last_name)) {
    print '2つの文字列は等しいです。';
}else{
  echo '2つの文字列は等しくありません。';
}
?>