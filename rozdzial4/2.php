// łączenie ciągów
<br>
<?php
header('Content-Type: text/html; charset=utf-8');

    $wyswietl = "Bardzo";
    $wyswietl .= " lubię";
    $wyswietl .= " placki.";

    // polecenie wyświetli napis: "Bardzo lubię placki."
    echo $wyswietl . '<br>';

    // wyświetli napis: Moje motto to: "Bardzo lubię placki."
    echo 'Moje motto to: "'.$wyswietl.'"';

?>

<br>

<?php

    $data[0] = "18";
    $data[1] = "07";
    $data[2] = "1976";
    $wyswietl_date = implode(" - ", $data);

    // wyświetli "18 - 07 - 1976"
    echo $wyswietl_date;

?>

