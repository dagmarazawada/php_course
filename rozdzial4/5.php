// wyrażenia regularne, regex
<br>

<?php
header('Content-Type: text/html; charset=utf-8');

    $tekst = "absdvsas";

    // konstrukcja wyrażenia regularnego
    $wyrazenie = '/^[a-z]+$/';
    echo $wyrazenie . "<br>";

    // preg_match() sprawdza występowanie wyrażenia w ciągu
    if(preg_match($wyrazenie, $tekst)) 
       echo("Tekst zawiera tylko małe litery.");
    else 
       echo("Tekst zawiera dodatkowe znaki poza małymi literami.");    

?>
<p>Konstrukcja wyrażenia regularnego: musi zaczynać się /^ i kończyć się $/. <br>Przedział znaków ma być w [ ], np. [a-eA-E0-7]</p>
<ul>
<li>.	Zastępuje dowolny znak</li>
<li>\s	Spacja</li>
<li>\n	Znak nowej linii</li>
<li>\d	Cyfra</li>
<li>^	Początek linii lub zaprzeczenie</li>
<li>$	Koniec linii</li>
<li>|	Alternatywa</li>
<li>{a,b}	Ilość wystąpień danego wzorca – co najmniej a i co najwyżej b razy</li>
<li>{a,}	Jak wyżej, bez limitu górnego</li>
<li>{,b}	Jak wyżej, bez limitu dolnego</li>
<li>{a}	Dokładnie a wystąpień</li>
<li>?	Zero lub jedno wystąpienie; tak samo jak {0,1}</li>
<li>+	Jedno lub więcej wystąpień; tak samo jak {1,}</li>
<li>*	Dowolna ilość wystąpień (również zero); podobnie jak {0,}</li>
<li>[]	Zakres</li>
</ul>