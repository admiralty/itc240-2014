<?php

include("password.php");

$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

$query = 'INSERT INTO parks (Name, Neighborhood, Rating, Review) VALUES (?, ?, ?, ?);';
$prepared = $mysql->prepare($query);
$prepared->bind_param("ssis", $_REQUEST["Name"], $_REQUEST["Neighborhood"], $_REQUEST["Rating"], $_REQUEST["Review"]);
$prepared->execute();

header("Location: index.php");