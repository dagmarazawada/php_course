<?php

    function zdobadz_email($strona)
    {
        // formuła prawidłowego adresu e-mail 
        $sprawdz = '/[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}/';
        
        $plik = file_get_contents($strona);
        
        $zapis = fopen('zapis_strony.txt','a');
        //fwrite($zapis, $plik);
        
        //echo $plik . "<br>";
        preg_match_all($sprawdz, $plik, $wynik);
        //echo var_dump($wynik);
        //echo count($wynik[0]);
        
        for ($i = 0; $i < count($wynik[0]); $i++) {
            echo $mail = $wynik[0][$i] . "<br>";
            $mail = $wynik[0][$i] . "\n";
            fwrite($zapis, $mail);
        }

        // procedura wysyłania maila
        $od  = "From: uzytkownik@kursphp.com \r\n";
        $od .= 'MIME-Version: 1.0'."\r\n";
        $od .= 'Content-type: text/html; charset=iso-8859-2'."\r\n";
        $adres = "przyklad@uzycia.pl";
        $tytul = "Adresy e-mail";
        $wiadomosc = "Znalezione adresy e-mail to: $zapis";
        mail($adres, $tytul, $wiadomosc, $od);

        // zamknięcie
        fclose($zapis);
        
    }

?>