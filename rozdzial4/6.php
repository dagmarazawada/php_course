<form action="6.php" method="get">
    imie:
    <input type="text" name="imie" />
    <br/> nazwisko:
    <input type="text" name="nazwisko" />
    <input type="submit" value="OK" />
    <br/>
</form>

<?php
header('Content-Type: text/html; charset=utf-8');

    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];

    // konstrukcja wyrażenia regularnego, poprawność imienia oraz nazwiska
    $sprawdz = '/^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/';

    // ereg() sprawdza dopasowanie wzorca do ciągu, zwraca true jeżeli tekst pasuje do wyrażenia
    if(preg_match($sprawdz, $imie)) // było ereg(), deprecated -> teraz jest preg_match()
    {
       if(preg_match($sprawdz, $nazwisko))
          echo "Dane wyglądają na poprawne.";
       else
          echo "Błędne nazwisko.";
    }
    else 
       echo "Błędne imię.";
  
?>