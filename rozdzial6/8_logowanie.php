<?php

session_start();
require_once("8_funkcje.php");

?>
<html>
<head>
   <title>Logowanie</title>
</head>
<body>
<?php

  if (isset($_SESSION['zalogowany']))
  {
    echo 'Jesteś już zalogowany, przejdź na stronę wysyłania pliku';
	echo 'klikając <a href="8_wysylanie.php" >tutaj</a>.';
  }
  else
  {
?>
    <form action="8_zaloguj.php" method="post" >
    <input type="text" name="login" />
    <input type="password" name="haslo" />
    <input type="submit" value="wyślij" />
    </form>
<?php
  }
?>
</body>
</html>