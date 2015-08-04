// bezpieczenstwo
<br>

<?php

    // Tekst zawierający potencjalne niebezpieczeństwo
    $string = '<a href="adres">Niebiezpieczny link</a> do <b>strony konkurencji</b>.';

    // HTMLSPECIALCHARS
    $string_h = htmlspecialchars($string);

    // STRIP_TAGS
    $string_t = strip_tags($string);

    echo 'htmlspecialchars: ' . $string_h . '<br>'; 
    
    echo 'strip_tags: ' . $string_t;

?>