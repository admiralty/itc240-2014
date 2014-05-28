<?php

include("password.php");

$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

$query = 'SELECT * FROM expense_report WHERE expense = ?';
$prepared = $mysql->prepare($query);
$expense =3;
$prepared->bind_param("i", $expense);
$prepared->execute();
$result = $prepared->get_result();

echo "<pre>";
foreach ($result as $row) {
	print_r($row);
	}