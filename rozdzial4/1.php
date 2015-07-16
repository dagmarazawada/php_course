// liczby losowe
<br>

<?php
    echo rand() . "<br>";
    echo getrandmax() . " - getrandmax() dla Windows 32768, dla Unix 2147483647 <br>";


    $i = rand(15,30);
    echo "Wylosowana liczba z zakresu (15 - 30) to $i <br>";

?>