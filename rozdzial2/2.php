<?php
    header('Content-Type: text/html; charset=utf-8');
    
    $a = 72; // przypisujemy wartość zmiennej $a

    switch ($a) // sprawdzamy zmienną $a
    {
    case 1:
      echo "Wartość zmiennej a to 1";
      break;

    case 2:
      echo "Wartość zmiennej a to 2";
      break;

    case 3:
      echo "Wartość zmiennej a to 3";
      break;

    case 72:
      echo "Wartość zmiennej a to 72";
      break;

    default:
      echo "Żadna z powyższych";
      break;
    }
?>