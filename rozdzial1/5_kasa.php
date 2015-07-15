<?php

    $kwota_brutto = $_POST['kwota_brutto'];
    $kwota = $_POST['kwota'];
    $reszta = $kwota - $kwota_brutto;

?>

<html>
<meta charset="utf-8">

<head>
    <title>Kasa</title>
</head>

<body>
    <?php 
        echo "Kwota brutto: " . $kwota_brutto . "<br/>";
        echo "Kwota: " . $kwota . "<br/>";
        echo "Reszta: " . $reszta . "<br/>";
    ?>