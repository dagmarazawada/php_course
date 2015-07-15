<?php

    define("KOSZULKA", 14.99); // cena koszulki jako stała

    define("SPODNIE", 45.99); // cena spodni

    define("CZAPKA", 9.63); // cena czapki

    define("BUTY", 9.99); // cena czapki

    define("P_VAT", 0.23); // wysokość podatku VAT

    $ile_koszulki = $_POST['koszulki']; // przypisanie zmiennych formularza

    $ile_spodnie = $_POST['spodnie'];

    $ile_czapki = $_POST['czapki'];

    $ile_butow = $_POST['buty'];

    $kwota_koszulki_netto = $ile_koszulki*KOSZULKA; // wartość netto zamówionych koszulek

    $kwota_spodnie_netto = $ile_spodnie*SPODNIE; // wartość netto spodni

    $kwota_czapki_netto = $ile_czapki*CZAPKA; // wartość netto czapek

    $kwota_buty_netto = $ile_butow*BUTY; // wartość netto czapek

    $kwota_zamowienia_netto = $kwota_koszulki_netto + $kwota_spodnie_netto + $kwota_czapki_netto + $kwota_buty_netto; // cena netto całego zamówienia

    $kwota_koszulki_brutto = $kwota_koszulki_netto + $kwota_koszulki_netto*P_VAT; // wartość brutto koszulek

    $kwota_spodnie_brutto = $kwota_spodnie_netto + $kwota_spodnie_netto*P_VAT; // wartość brutto spodni

    $kwota_czapki_brutto = $kwota_czapki_netto + $kwota_czapki_netto*P_VAT; // wartość brutto czapek

    $kwota_buty_brutto = $kwota_buty_netto + $kwota_buty_netto*P_VAT; // wartość brutto czapek

    $kwota_zamowienia_brutto = $kwota_koszulki_brutto + $kwota_spodnie_brutto + $kwota_czapki_brutto + $kwota_buty_brutto; // cena zamówienia brutto

?>
<html>
<meta charset="utf-8">

<head>
    <title>Obsługa zamówienia</title>
</head>

<body>
    <?php 
        echo "liczba koszulek: " . $ile_koszulki . "<br/>";
        echo "Cena netto zamówionych koszulek: ".$kwota_koszulki_netto. "<br/>"; 
        echo "Cena netto zamówionych spodni: ".$kwota_spodnie_netto. "<br/>"; 
        echo "Cena netto zamówionych czapek: ".$kwota_czapki_netto. "<br/>";
        echo "Cena netto zamówionych butów: ".$kwota_buty_netto. "<br/>";
        echo "Wartość netto całego zamówienia: ".$kwota_zamowienia_netto. "<br/>"; 
        echo "Cena brutto zamówionych koszulek: ".$kwota_koszulki_brutto. "<br/>"; 
        echo "Cena brutto zamówionych spodni: ".$kwota_spodnie_brutto. "<br/>"; 
        echo "Cena brutto zamówionych czapek: ".$kwota_czapki_brutto. "<br/>"; 
        echo "Cena brutto zamówionych butów: ".$kwota_buty_brutto. "<br/>"; 
        echo "Wartość brutto całego zamówienia: ".$kwota_zamowienia_brutto. "<br/>"; 
    ?>
    <p>Kwota:</p>
        <form action="5_kasa.php" method="post">
        <input type="text" name="kwota" size=3 maxsize=3 />
        <input type="hidden" name="kwota_brutto" value="<?php echo $kwota_zamowienia_brutto; ?>" />
        <input type="submit" value="oblicz resztę" />
            
</body>

</html>