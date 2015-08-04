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
  else
  {
?>
    <form enctype="multipart/form-data" action="8_wyslij.php" 
		 method="post" >
<input type="hidden" name="MAX_FILE_SIZE" value="1024" />
<input type="file" name="reklama" />
<input type="submit" value="wyślij" />
</form>
<?php
  }
?>
</body>
</html>
