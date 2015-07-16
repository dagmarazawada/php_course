<?php
header('Content-Type: text/html; charset=utf-8');

    function wypisz_dnim($i) {
        $data = date("Y-m-d", mktime (0,0,0,05,26,$i));
        return $data;
    }
        

    function zapisz_dnim() {
 
        for ($i = 0; $i < 10;) {
            for ($j = 2005; $j < 2016;) {
                $tablica_dnim[$i] = wypisz_dnim($j);
                $j++;
            }
            echo $tablica_dnim[$i] . '<br>';
            $i++;
        }
           
              
    }

    zapisz_dnim();

?>