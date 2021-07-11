<?php

$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "postgresExperiments";

$conn = new PDO("pgsql:host=$servername;dbname=$dbname", $username, $password);
