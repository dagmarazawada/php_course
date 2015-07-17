// odczytywanie plików

<p>fread - czyta z pliku określoną długość znaków</p>
<p>fgets - czyta jedną linię pliku do znacznika przejścia do nowej linii (do odczytu całego pliku: pętla)</p>
<p>feog - zwraca true jeśli osiągnie koniec pliku</p>
<p>fgetc - czyta po jednym znaku</p>

<br>

<?php
header('Content-Type: text/html; charset=utf-8');

    // utworzenie uchwytu do pliku
    $plik = fopen('2_funkcje.php','r');

    // przypisanie zawartości do zmiennej
    $zawartosc = fread($plik, 8192);
    echo $zawartosc;

?>

<br>

<?php

    // utworzenie uchwytu do pliku
    $plik = fopen('2_funkcje.php','r');

    $zawartosc = '';

    // przypisanie zawartości do zmiennej
    while(!feof($plik))
    {
       $linia = fgets($plik);
       $zawartosc .= $linia;
    }

    echo $zawartosc;

?>

<br>

<?php

    // utworzenie uchwytu do pliku
    $plik = fopen('2_funkcje.php','r');

    $zawartosc = '';

    // przypisanie zawartości do zmiennej
    while(!feof($plik))
    {
       $linia = fgetc($plik);
       $zawartosc .= $linia;
    }

    echo $zawartosc;

?>