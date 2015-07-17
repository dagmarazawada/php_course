// zapisywanie plików
<br>

<p>fwrite</p>

<?php
header('Content-Type: text/html; charset=utf-8');

    // utworzenie uchwytu do pliku
    // tryb a umożliwia zapis na końcu pliku
    $plik = fopen('zapis_pliku.txt','a');

    // przypisanie zawartości do zmiennej
    $zawartosc = "Przykładowa treść, którą umieścimy w pliku.";

    fwrite($plik, $zawartosc);

?>

<?php

    // utworzenie uchwytu do pliku
    $plik = fopen('zapis_pliku2.txt','a');

    // przypisanie zawartości do zmiennej
    $zawartosc = "Przykładowa treść, którą umieścimy w pliku. ";
    $zawartosc .= "Utniemy ciąg po 30 znakach.";

    fwrite($plik, $zawartosc, 30);

?>