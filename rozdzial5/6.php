<?php

    require("6_funkcja.php");

?>

<html>
<meta charset="utf-8">
<head>
    <title>Przeszukiwacz stron</title>
</head>

<body>
    <?php zdobadz_email("http://localhost/_kursphp/rozdzial5/6_test.html"); ?>
    <p>OK</p>
    
    <p> niektóre serwery mogą ograniczyć oddawanie odpowiedzi w ten sposób; można spróbowac cURL (musi być w ustawieniach php zainstalowane/włączone)</p>
    
</body>

</html>