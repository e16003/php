<?php

$errors = array();
$_POST['age'] = '40';


if ($_POST['age'] != strval(intval($_POST['age']))) {
    $errors[] = 'Please enter a valid age.';

}else{

  $errors[] = "OK!（本来はメッセージは追加されない）";
}

var_dump($errors);