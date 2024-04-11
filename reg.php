<?php
require "index.php";
$username = $_POST["login"];
$password = $_POST["password"];
$sql_insert = "INSERT INTO users (login,pass) VALUES ('$username','$password')";
$db->query($sql_insert)
?>