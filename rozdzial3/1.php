<?php
header('Content-Type: text/html; charset=utf-8');
    function wyswietl_powitanie() // deklaracja funkcji
    {
       echo "Witam serdecznie!";  // ciało funkcji, czyli
       echo "Proszę się zarejestrować. <br>";  // instrukcje do wykonania
    }

    wyswietl_powitanie();
?>

<?php

    function tresc_powitania() // deklaracja funkcji
    {
       return "Witam wszystkich! <br>";
    }

    $powitanie = tresc_powitania();
    echo $powitanie;
    echo tresc_powitania();

?>

<?php

    function oblicz()
    {
       $zm1 = 3;
       $zm1 += 5;
       $zm1++;
       return $zm1;
    }

    if (oblicz() > 5)
       echo "Funkcja zwraca wartość większą od 5 <br>";
    else
       echo "Wartość zwracana przez funkcję jest mniejsza od 6 <br>";

?>

<?php

    function przywitaj($zmienna_z_imieniem)
    {
       echo 'Witaj '.$zmienna_z_imieniem.'! <br>';
    }

    $imie = "aaaaa";

    przywitaj($imie);

?>

<?php

    function kwadrat($liczba)
    {
       return $liczba*$liczba;
    }

    $numer = 5;
    $wynik = kwadrat($numer);

    echo $wynik . '<br>'; // wyświetli 25

?>

<?php

    function silnia($liczba)
    {
       $wynik = 1;
       while($liczba > 1)
       {
          $wynik *= $liczba;
          $liczba--;    
       }
       return $wynik;
    }
    echo silnia(3) . '<br>';

?>

// funkcja rekurencyjna - zajmuje duża ilość pamięci, raczej nie stosować
<br>
<?php

    function silnia2($liczba)
    {
       if($liczba < 2) 
          return 1;
       else
          return $liczba*silnia2($liczba-1);  
    }

    echo silnia2(4);


?>