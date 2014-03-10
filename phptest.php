<?php
$mysqli = new mysqli('localhost', 'root', '', 'data');


if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}


if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Success... ' . $mysqli->host_info . "\n";

$result = $mysqli->query("SELECT * FROM users WHERE user='admin'");
$row = $result->fetch_object();
//echo $row->password.' '.$row->user;
$mysqli->close();
$hash = md5($row->password.$row->user.$row->password.'<//>>;;');
echo $hash;
?>