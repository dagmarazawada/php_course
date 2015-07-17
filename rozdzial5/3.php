// praca na plikach
<br>

<html>
    <meta charset="utf-8">
<head>
   <title>Pliki</title>
</head>
<body>

    <?php

        // zastosowanie instrukcji fopen
        $uchwyt = fopen("nowyplik.txt", "w");

    ?>

    <?php

        // zastosowanie instrukcji fopen
        $uchwyt = fopen("nowyplik2.txt", "w");

        // usunięcie pliku
        unlink("nowyplik.txt");

    ?>

    <p>Tryby otwarcia plików</p>
    <ul>
    <li>‚r’	Otwiera tylko do odczytu; umieszcza wskaźnik pliku na jego początku.</li>
    <li>‚r+’	Otwiera do odczytu i zapisu; umieszcza wskaźnik pliku na jego początku.</li>
    <li>‚w’	Otwiera tylko do zapisu; umieszcza wskaźnik pliku na jego początku i obcina plik do zerowej długości. Jeśli plik nie istnieje to próbuje go utworzyć.</li>
    <li>‚w+’	Otwiera do odczytu i zapisu; umieszcza wskaźnik pliku na jego początku i obcina plik do zerowej długości. Jeśli plik nie istnieje to próbuje go utworzyć.</li>
    <li>‚a’	Otwiera tylko do zapisu; umieszcza wskaźnik pliku na jego końcu. Jeśli plik nie istnieje to próbuje go utworzyć.</li>
    <li>‚a+’	Otwiera do odczytu i zapisu; umieszcza wskaźnik pliku na jego końcu. Jeśli plik nie istnieje to próbuje go utworzyć.</li>
    <li>‚x’	Tworzy i otwiera plik tylko do zapisu; umieszcza wskaźnik pliku na jego początku. Jeśli plik juz istnieje, wywołanie fopen() nie powiedzie się, zwróci FALSE i wygeneruje błąd na poziomie E_WARNING. Jeśli plik nie istnieje, spróbuje go utworzyć. To jest równoważne z określeniem flag O_EXCL|O_CREAT stosowanym w wywołaniu systemowym open(2).</li>
    <li>‚x+’	Tworzy i otwiera plik odczytu i zapisu; umieszcza wskaźnik pliku na jego początku. Jeśli plik juz istnieje, wywołanie fopen() nie powiedzie się, zwróci FALSE i wygeneruje błąd na poziomie E_WARNING. Jeśli plik nie istnieje, spróbuje go utworzyć. To jest równoważne z okresleniem flag O_EXCL|O_CREAT stosowanym w wywołaniu systemowym open(2).</li>
    </ul>
    
</body>
</html>