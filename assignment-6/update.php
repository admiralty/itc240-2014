<?php

include("password.php");

$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

$query = 'INSERT INTO neko_punch (accomplished_on, activity, calories) VALUES (NOW(), ?, ?);';
$prepared = $mysql->prepare($query);
$prepared->bind_param("si", $_REQUEST["activity"], $_REQUEST["calories"]);
$prepared->execute();

header("Location: index.php");

// test

