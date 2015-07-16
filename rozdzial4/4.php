// manipulacja stringów
<br>

<?php
header('Content-Type: text/html; charset=utf-8');
    // przykładowy ciąg znaków zawierający małe oraz wielkie litery
    $wyswietl = "Bardzo lubię placki";

    // użycie funkcji strtoupper()
    $duze_litery = strtoupper($wyswietl);

    // wyświetli napis: BARDZO LUBIĘ PLACKI
    echo $duze_litery;

?>

<br>

<?php

    // przykładowy ciąg znaków zawierający małe oraz wielkie litery
    $wyswietl = "BarDzo Lubię PlaCki";

    // użycie funkcji strtolower()
    $male_litery = strtolower($wyswietl);

    // wyświetli napis: bardzo lubię placki
    echo $male_litery;

?>

<br>

<?php

    // przykładowy ciąg znaków zawierający małe litery
    $wyswietl = "bardzo lubię placki";

    // użycie funkcji ucwords()
    $zdanie = ucwords($wyswietl);

    // wyświetli napis: Bardzo Lubię Placki
    echo $zdanie;

?>

<?php

    // przykładowy ciąg znaków
    $wyswietl = "bardzo lubię placki";

    // użycie funkcji strlen()
    $ilosc = strlen($wyswietl);

    if ($ilosc > 20)
       echo "Treść dłuższa niż 20 znaków.";
    else
       echo "Treść zawiera 20 znaków lub mniej.";

?>

<br>

<?php

    // przykładowy ciąg znaków
    $wyswietl = "    bardzo lubię placki    ";

    // użycie funkcji trim()
    $zdanie = trim($wyswietl);

    echo $zdanie;

?>