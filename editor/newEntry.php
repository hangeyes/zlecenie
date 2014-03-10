<?php
session_start();
if($_SESSION['id']==null) {
	echo '<html><head>
  <meta http-equiv="Refresh" content="2; url=../login.html" />
  <meta charset="UTF-8">
</head><body>Nie masz dostępu do tej sekcji. Zaloguj się, by go otrzymać.</body>';
exit;
}
require "../Connection.php";

$connection = new Connection();
$connection = new Connection();
$link = $connection->connect();
$result = $link->query("SELECT * FROM users WHERE ID=".$_SESSION["id"]);
$row = $result->fetch_object();

$author = $row->user;
$title = $_POST['title'];
$content = $_POST['editor1'];
$date = date("Y-m-d");
$insert = "INSERT INTO `content` (`ID`, `Title`, `Content`, `User`, `Date`) VALUES (NULL, '" .$title ."', '" .$content ."', '" .$author ."', '" .$date ."')";
//echo $insert;
$link->query($insert);
?>