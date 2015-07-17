// include i require - zewnętrzne pliki w kodzie
<br>

<?php
header('Content-Type: text/html; charset=utf-8');

    include("2_funkcje.php");

?>

<html>
    <head>
       <title>Przykład</title>
    </head>
    <body>
        <p>to jest treść strony</p>
        <?php
            stopka(); // zastosowanie funkcji z zewnętrznego pliku
            stopka();
        ?>
        <p>funkcje include_once() i require_one() - mimo kilku wywołań w jednym skrypcie, plik zostanie załączony wyłącznie raz</p>
    </body>
</html>