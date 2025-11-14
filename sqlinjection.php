<?php

$password = "123";
//zestawienie połączenia z bazą danych
$conn = new mysqli("localhost", "username", $password, "database");

//pobranie danych z zapytania http
$login = $_POST['login'];
$hasło = $_POST['hasło'];

//Podatność w zapytaniu
$sql = "SELECT * FROM użytkownicy WHERE login = '$login' AND hasło = '$hasło'";
$result = $conn->query($sql);