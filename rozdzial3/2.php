// tablice
<br>
<?php
header('Content-Type: text/html; charset=utf-8');

    $tablica[0] = 1;    // przypisanie wartosci kolejnym indeksom
    $tablica[1] = 4;
    $tablica[2] = 1;
    $tablica[3] = 0;

    for ($i = 0; $i < 4; $i++) // wyświetlenie każdego indeksu za pomocą pętli for
       echo $tablica[$i] . " <br>";

?>

// wypisanie wszystkich cyfr podzielnych przez 4 z danego zakresu
<br>
<?php

    $pewna_zmienna = 16; // gdzie X to dowolna wartość

    $j = 0; // zmienna pomocnicza
    $i = 0; // zmienna iteracyjna

    while($i <= $pewna_zmienna) // warunek kontynuacji pętli
    {
       if($i % 4 == 0) // jeśli podzielna przez 4
       {
          $tablica[$j] = $i;  // dodaj kolejny element do tablicy
          $j++; // zwiększ indeks o 1
       }
       $i++; // zwiększamy $i o 1, aż przekroczymy $pewna_zmienna
    }

    for ($i = 0; $i < $j; $i++) // wyświetlenie wszystkich
       echo $tablica[$i]."<br/>"; // elementów tablicy

?>

// tablice wielowymiarowe
<br>

<?php

    $tablica_ucznia[0] = "Janek";
    $tablica_ucznia[1] = "Kowalski";
    $tablica_ucznia[2] = "14-10-1995";

    $tablica_klasy[0] = $tablica_ucznia;

    $tablica_ucznia[0] = "Krzysiek";
    $tablica_ucznia[1] = "Nowak";
    $tablica_ucznia[2] = "24-12-1994";

    $tablica_klasy[1] = $tablica_ucznia;

    $tablica_ucznia[0] = "Ewa";
    $tablica_ucznia[1] = "Kowalska";
    $tablica_ucznia[2] = "17-03-1996";

    $tablica_klasy[2] = $tablica_ucznia;

    echo $tablica_klasy[0][0];
?>

<br>

<?php

    $tablica_ucznia['imie'] = "Janek";
    $tablica_ucznia['nazwisko'] = "Kowalski";
    $tablica_ucznia['data_ur'] = "14-10-1995";

    $tablica_klasy[0] = $tablica_ucznia;

    $tablica_ucznia['imie'] = "Krzysiek";
    $tablica_ucznia['nazwisko'] = "Nowak";
    $tablica_ucznia['data_ur'] = "24-12-1994";

    $tablica_klasy[1] = $tablica_ucznia;

    $tablica_ucznia['imie'] = "Ewa";
    $tablica_ucznia['nazwisko'] = "Kowalska";
    $tablica_ucznia['data_ur'] = "17-03-1996";

    $tablica_klasy[2] = $tablica_ucznia;

    echo $tablica_klasy[1]['imie'];
?>