// wyjatki

<br>
$e->getCode() zawiera kod wyrzuconego wyjątku
<br>
$e->getMessage() zawiera komunikat wyjatku

<?php

if(!wykonaj_funkcje())
	throw new Exception('Funkcja nie mogła być wykonana', 5);

?>

<?php

    // bezpieczne funkcje
    try
    {
        // podejrzane funkcje
    }
    catch (Exception $e)
    {
        echo 'Wystąpił wyjątek nr '.$e->getCode().', jego komunikat to:
    '.$e->getMessage();
    }

?>

