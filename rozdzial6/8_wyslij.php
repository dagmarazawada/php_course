<?php

session_start();
require_once("8_funkcje.php");

?>
<html>
<head>
   <title>Wysyłanie hasła</title>
</head>
<body>
<?php

  if (!isset($_SESSION['zalogowany']))
  {
    echo 'Jesteś niezalogowany, przejdź na stronę logowania';
	echo 'klikając <a href="8_logowanie.php" >tutaj</a>.';
  }
  elseif(!isset($_POST['reklama']))
  {
    echo 'Nie wybrano pliku, proszę spróbować ponownie,';
	echo 'klikając <a href="8_wysylanie.php" >tutaj</a>.';
  }
  else
  {
    try
    {
	  sprawdz_cookie();
      sprawdz_plik();
	  zapisz_plik();
	  zapisz_cookie();
	}
	catch (Exception $e)
	{
	  echo "Wystąpił błąd podczas wysyłania pliku,";
	  echo "jego komunikat to ".$e->getMessage();
    }
  }
?>
</body>
</html>
