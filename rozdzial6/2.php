// sesje
<br>

<?php

    // inicjacja sesji
    session_start();

    // utworzenie zmiennej sesji
    $_SESSION['zm_sesji'] = "zmienna_sesji";
        
    // użycie zmiennej
    echo $_SESSION['zm_sesji'];

    // usuwanie zmiennej
    unset($_SESSION['nazwa_zmiennej']);
    // lub usuwanie wszystkich zmiennych z $_SESSION
    $_SESSION = array();

    // zniszczenie sesji
    session_destroy();

?>

