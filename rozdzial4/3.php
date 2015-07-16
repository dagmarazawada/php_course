// szukanie podciągu
<br>

<?php
header('Content-Type: text/html; charset=utf-8');

    $wpisany_tekst = "Rozwijam swoją wiedzę w dziedzinie PHP.";
    $wpisany_tekst2 = "a cholera"; // nie działa w przypadku gdy zaczyna się od słowa "cholera"

    $czyWulgarne = strpos($wpisany_tekst, "cholera");
    $czyWulgarne2 = strpos($wpisany_tekst2, "cholera");

    if ($czyWulgarne == FALSE) // nie znaleziono słowa cholera
       echo "Można wyświetlić: $wpisany_tekst";
    else // znaleziono szukany wyraz
       echo "Tekst zawiera wulgarne słownictwo.";

    echo '<br>';

    if ($czyWulgarne2 == FALSE) // nie znaleziono słowa cholera
       echo "Można wyświetlić: $wpisany_tekst2";
    else // znaleziono szukany wyraz
       echo "Tekst zawiera wulgarne słownictwo.";

?>
<br>

<?php

    // string do rozdzielenia
    $dane = "Marcin,Wesel,Bielsko-Biała";

    // wykorzystanie funkcji explode, wg przecinka
    $dane_osobowe = explode(",", $dane);

    // wyświetlenie otrzymanej tablicy
    echo $dane_osobowe[0]."<br/>";
    echo $dane_osobowe[1]."<br/>";
    echo $dane_osobowe[2]."<br/>";

?>

<?php

    $tekst = "Liwto, ojczyzno moja, Ty jesteś jak zdrowie.";

    $wyrazy = explode(" ", $tekst);

    // wyświetli ilość wyrazów w zmiennej $tekst
    echo count($wyrazy);

?>