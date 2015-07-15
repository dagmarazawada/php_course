<?php

$a = 3;
$i = 0;

switch ($a) // sprawdzamy zmienną $a
    {
    case 2:
    while ($i<10){
        echo $i * $i . '<br>'; 
        $i++;
    }
    break;

    case 3:
    while ($i<10){
        echo $i * $i * $i . '<br>'; 
        $i++;
    }
    break;

    case 4:
    while ($i < 10){
        echo $i * $i * $i * $i . '<br>';
        $i++;
    }
    break;

    default:
      echo "Inna zmienna..";
      break;
    }

?>