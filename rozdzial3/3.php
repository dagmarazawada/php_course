// data i czas
<br>

<?php
header('Content-Type: text/html; charset=utf-8');

    $data=date("Y/m/d");
    $czas=date("H:i");

    echo "Stronę wyświetlono dnia $data o godzinie $czas <br>";

?>

<?php

    $data=date("Y-m-d, H:i", mktime (11,20,0,10,15,1985));

    echo $data;

?>