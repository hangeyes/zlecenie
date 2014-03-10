<?php
require 'Connection.php';

function login() {
	$connection = new Connection();
	$link = $connection->connect();
	$result = $link->query("SELECT * FROM users WHERE user='".$_POST["login"]."'");
	$row = $result->fetch_object();
	if($row->password == md5($_POST["pwd"].$_POST["login"].$_POST["pwd"].'<//>>;;')) {
		return $row->ID;
	} else {
		return false;
	}
}
$id = login();
if($id != false) {
	session_start();
	$_SESSION['id'] = $id;
	echo '<html><head>
  <meta http-equiv="Refresh" content="2; url=panel.php" />
  <meta charset="UTF-8">
</head><body>Zalogowano pomyślnie</body>';
} else {
	session_start();
	$_SESSION['id'] = null;
	echo '<html><head>
  <meta http-equiv="Refresh" content="2; url=login.html" />
  <meta charset="UTF-8">
</head><body>Logowanie nieudane, za chwilę nastąpi powrót do strony logowania.</body>';
}
?>