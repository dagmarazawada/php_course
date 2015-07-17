<?php
header('Content-Type: text/html; charset=utf-8');

    function sprawdz_email($email)
    {
       $spr = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';
       if(preg_match($spr, $email))
          return true;
       else
          return false;
    }

    function sprawdz_imie($imie)
    {
      $sprawdz = '/^[a-zA-ZŁŚĆŹŻĄĘÓŃąęółśżźćń]+$/';
       if(preg_match($sprawdz, $imie))
       {
          $imie = ucwords(strtolower($imie));
          return $imie;
       }    
       else
          return false;
    }

    function sprawdz_telefon($telefon)
    {
       $sprawdz = '/^[0-9]{9}+$/';
       if(preg_match($sprawdz, $telefon))
          return true;
       else
          return false;
    }

    function sprawdz_tresc($tresc)
    {
       $tresc = trim($tresc);
       if(strlen($tresc) < 30)
          return false;
       else
          return $tresc;
    }

    function sprawdz_tresc2($tresc2) {
        $sprawdz = '/^.*kurde|cholera|pieprze.*$/';
        $tresc2 = trim($tresc2);
        if(preg_match($sprawdz, $tresc2))
            return true;
        else 
            return false;
    }


    function sprawdz_domene($email) { 
        $domena = explode("@", $email);
        $domena_kod = explode(".", $domena[1]);
        switch ($domena_kod[1]){
            case "com":
                return "domena miedzynarodowa: ." . $domena_kod[1];
                break;
            case "pl":
                return "domena polska: ." . $domena_kod[1];
                break;
            case "eu":
                return "domena europejska: ." . $domena_kod[1];
                break;
            default:
                return "domena: ." . $domena_kod[1];
                break;
        }
    }


    $email = $_POST['email'];
    $imie = $_POST['imie'];
    $tel = $_POST['telefon'];
    $tresc = $_POST['tresc'];
    $tresc2 = $_POST['tresc'];
    $blad_danych = false;

    

    if (!sprawdz_email($email))
       {
          echo "Adres e-mail niepoprawny <br>";
          $blad_danych = true;
       }
    $imie = sprawdz_imie($imie);
    if (!$imie)
       {
          echo "Imię wpisano niepoprawnie <br>";
          $blad_danych = true;
       }
    if (!sprawdz_telefon($tel))
       {
          echo "Błędny format telefonu <br>";
          $blad_danych = true;
       }
    
    $tresc = sprawdz_tresc($tresc);
    if (!$tresc)
       {
          echo "Niepoprawna treść <br>";
          $blad_danych = true;
       }
    
    $tresc2 = sprawdz_tresc2($tresc2);
    if ($tresc2) {
        echo "Wulgaryzmy w treści komentarza <br>";
        $blad_danych = true;
    }

    if ($blad_danych)
       {
          echo "Wystąpił jeden lub więcej błędów podczas przetwarzania danych. <br>";
       }
    else
       {
          echo "Imię klienta: $imie;";
          echo "Adres e-mail: $email;";
          echo "Numer telefonu: $tel;";
          echo "Treść: $tresc;";
       }        
    echo sprawdz_domene($email);

    $dane['0'] = $imie;
    $dane['1'] = $email;
    $dane['2'] = $tel;
    $dane['3'] = $tresc;
    
    $wyswietl_dane = implode("; ", $dane);

    echo '<br>' . $wyswietl_dane;
    

?>