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
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<p>Witaj w panelu admina! Co chcesz zrobić?</p>
		<ul>
			<li>
				<a href="soon.php">Dodaj nowy post.</a>
			</li>
			<li>
				<a href="soon.php">Edytuj istniejący post.</a>
			</li>
			<li>
				<a href="soon.php">Edytuj zawartość strony głównej.</a>
			</li>
			<li>
				<a href="soon.php">Edytuj zawartość strony Oferta, Kontakt lub Technologia</a>
			</li>
			<li>
				<a href="soon.php">Edytuj zawartość stopki.</a>
			</li>
			<li>
				<a href="soon.php">Dodaj użytkownika z prawami administratora.</a>
			</li>
		</ul>
	</body>
</html>