<?php

$errors = array();
$_POST['name'] = '      ';



if (strlen(trim($_POST['name'])) == 0) {
    $errors[] = "Your name is required.";
}
else{
  $errors[] = "OK!(本来はメッセージは追加されない)";
}

var_dump($errors);