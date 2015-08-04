// wysylanie pliku na serwer

<br>

<form enctype="multipart/form-data" action="4_funkcja.php" 
		 method="post" >
<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
<input type="file" name="nazwa_pliku" />
<input type="submit" value="wyślij" />
</form>