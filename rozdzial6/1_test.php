<?php

    setcookie("ciastko", "dobre ciastko");

    echo $_COOKIE["ciastko"] . '<br>';

    if(isset($_COOKIE["ciastko"]))
       echo "Ciasteczko istnieje";
    else
       echo "Brak ciastecza o nazwie ciastko";
?>