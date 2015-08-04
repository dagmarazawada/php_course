<?php

// wyświetlanie typu pliku
echo 'typ pliku ' . $_FILES['nazwa_pliku']['type'] . '<br>';

// wyświetlanie rozmiaru
echo 'rozmiar ' . $_FILES['nazwa_pliku']['size'] . '<br>';

// wyświetlanie nazwy pliku
echo 'nazwa pliku ' . $_FILES['nazwa_pliku']['name'] . '<br>';

// wyświetlanie nazwy tymczasowej
echo 'nazwa tymczasowa ' . $_FILES['nazwa_pliku']['tmp_name'] . '<br>';

// wyświetlanie ewentualnych błędów
echo 'errory ' . $_FILES['nazwa_pliku']['error'] . '<br>';

?>