<?php
session_start();
if($_SESSION['id']==null) {
	echo '<html><head>
  <meta http-equiv="Refresh" content="2; url=../login.html" />
  <meta charset="UTF-8">
</head><body>Nie masz dostępu do tej sekcji. Zaloguj się, by go otrzymać.</body>';
exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<script src="ckeditor.js"></script>

	</head>
	<body>
		<form action="newEntry.php" method="post">
			Nazwa wpisu: <input type="text" name="title">
			<textarea class="ckeditor" name="editor1"></textarea>
			<input type="submit" value="Potwierdź">
		</form>
	</body>
</html>