<?php
session_start();
if($_SESSION['id']==null) {
	echo '<html><head>
  <meta http-equiv="Refresh" content="2; url=login.html" />
  <meta charset="UTF-8">
</head><body>Nie masz dostępu do tej sekcji. Zaloguj się, by go otrzymać.</body>';
exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>SOON&trade;</h1>
	</body>
</html>