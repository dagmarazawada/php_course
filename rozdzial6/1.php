// cookies
<br>

// utworzenie ciasteczka
<br>
setcookie($nazwa_ciastka, $wartosc_ciastka, $data_wygasniecia, $sciezka, $domena, $bezpieczne_https?);

<?php

    // zapisanie oddania głosu jednorazowego
    setcookie('oddano_glos1', '1');

    // w przypadku gdy głosować można raz dziennie
    setcookie('oddano_glos2', '1', time()+3600*24);

?>