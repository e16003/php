<?php


//配列名の命名規則
//1文字目がアルファベットまたはアンダースコア(_)
//2文字目以降はアルファベット、アンダースコア(_)または数字

$vegetables = array('corn' => 'yellow',
                    'beet' => 'red',
                    'carrot' => 'orange');

var_dump($vegetables);

$dinner = array(0 => 'Sweet Corn and Asparagus',
                1 => 'Lemon Chicken',
                2 => 'Braised Bamboo Fungus');

var_dump($dinner);

$computers = array('trs-80' => 'Radio Shack',
                   2600 => 'Atari',
                   'Adam' => 'Coleco');

var_dump($computers);

?>