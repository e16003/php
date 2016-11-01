<?php

  $food = array(

    'りんご',
    'みかん',
    'なし',

    );

  echo '<ul>';
  foreach ($food as $value) {
    echo "<li>{$value}</li>"; // echo '<li>' . $value . '</li>'
  }
  echo '</ul>';

 ?>