<?php
// An array called $vegetables with string keys
$vegetables['corn'] = 'yellow';
$vegetables['beet'] = 'red';
$vegetables['carrot'] = 'orange';

var_dump($vegetables);

unset($vegetables['beet']);//要素の削除

var_dump($vegetables);

unset($vegetables['corn']);//要素の削除

var_dump($vegetables);

unset($vegetables['carrot']);//要素の削除

var_dump($vegetables);

// An array called $dinner with numeric keys
$dinner[0] = 'Sweet Corn and Asparagus';
$dinner[1] = 'Lemon Chicken';
$dinner[2] = 'Braised Bamboo Fungus';

// An array called $computers with numeric and string keys
$computers['trs-80'] = 'Radio Shack';
$computers[2600] = 'Atari';
$computers['Adam'] = 'Coleco';
?>