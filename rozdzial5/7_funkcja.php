<?php

    function kopiuj_strone($strona)
    {
        $content = file_get_contents($strona);
        echo $content;
        $myfile = fopen("saved_page.html", "w") or die("Unable to open file!");
        fwrite($myfile, $content);
        fclose($myfile);
    }

?>