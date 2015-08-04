// tworzenie pliku graficznego
<br>

<?php

    // zdefiniowanie wysokości oraz szerokości pliku graficznego
    // podawane w pikselach
    $wysokosc = 50;
    $szerokosc = 50;

    // funkcja tworząca pusty obszar obrazka
    $obrazek = ImageCreateTrueColor($szerokosc, $wysokosc);

    // ustawienie adresu obrazka
    //$adres_obrazka = array("Users/dagmara/_php/obrazek.png", "Users/dagmara/_php/obrazek.jpg", "Users/dagmara/_php/obrazek.gif");

    // funkcja tworząca obszar obrazka z pliku .png
    //$obrazek = imagecreatefrompng($adres_obrazka[0]);

    // analogicznie tworzymy obrazki z plików .jpg i .gif
    //$obrazek = imagecreatefromjpeg($adres_obrazka[1]);
    //$obrazek = imagecreatefromgif($adres_obrazka[2]);

    // zdefiniowanie koloru czarnego dla obrazka
    // przechowywanego w zmiennej $obrazek
    $czarny = ImageColorAllocate($obrazek, 0, 0, 0);

    // wypełnienie kolorem całego tła
    ImageFill($obrazek, 0, 0, $czarny);

    $startX = 100;
    $startY = 100;
    $koniecX = 200;
    $koniecY = 200;

    ImageLine($obrazek, $startX, $startY, $koniecX, $koniecY, $czarny);
    ImageRectangle($obrazek, $startX, $startY, $koniecX, $koniecY, $czarny);
    ImageFilledRectangle($obrazek, $startX, $startY, $koniecX, $koniecY, $czarny);

public function show($obrazek) {

    // Begin capturing the byte stream
    ob_start();

    // generate the byte stream
    imagejpeg($obrazek, NULL, 100);

    // and finally retrieve the byte stream
    $rawImageBytes = ob_get_clean();

    echo "<img src='data:image/jpeg;base64," . base64_encode( $rawImageBytes ) . "' />";

}

    echo show($obrazek);

?>