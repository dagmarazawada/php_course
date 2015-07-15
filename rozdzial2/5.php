<?php
    header('Content-Type: text/html; charset=utf-8');
    $a = 6; // przypisujemy wartość zmiennej $a
    $odpowiedz = ($a>5) ? 'Większa od 5' : 'Mniejsza, bądź równa 5';

    echo $odpowiedz . '<br>';

    echo ($a<5) ? 'Mniejsza od 5' : 'Większa od 5';
?>