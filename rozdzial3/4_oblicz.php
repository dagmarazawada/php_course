<?php
header('Content-Type: text/html; charset=utf-8');
    function wypisz_dzien_tygodnia($data)
    {
        $dzien = date("w", mktime (0,0,0,$data['miesiac'],$data['dzien'],$data['rok']));
        switch($dzien) {
            case 1:
                echo "poniedzialek";
                break;
            case 2:
                echo "wtorek";
                break;
            case 3:
                echo "środa";
                break;
            case 4:
                echo "czwartek";
                break;
            case 5:
                echo "piątek";
                break;
            case 6:
                echo "sobota";
                break;
            case 7:
                echo "niedziela";
                break;
        } 
    }

    function oblicz_dni($data)
    {
        // 60 sekund to 1 minuta, 60 minut to 1 godzina, 24 godziny to 1 dzień
        $czas = (time() - mktime (0,0,0,$data['miesiac'],
        $data['dzien'],$data['rok']))/60/60/24;
        return $czas;
    }

    function sprawdz_pelnoletniosc($data){
        $ile_lat = oblicz_dni($data) / 365;
        //echo $ile_lat;
        if ($ile_lat < 18) {
            echo "Masz $ile_lat lat. Niepełnoletni!";
        }
        else {
            echo "Masz $ile_lat lat. Pełnoletni.";
        }
    }

    $data['dzien'] = $_GET['dzien'];
    $data['miesiac'] = $_GET['miesiac'];
    $data['rok'] = $_GET['rok'];

    wypisz_dzien_tygodnia($data);

    echo '<br>' . oblicz_dni($data); 
    
    echo '<br>';
    sprawdz_pelnoletniosc($data);

?>