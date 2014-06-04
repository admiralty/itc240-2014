<!doctype html>

<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
    </head>
    
    <body>

        <h1>&#x1f431; ねこのフィットネスとカロリーログ</h1>
        
        <h1>Neko's fitness log and calorie tracker</h1>
    
        
        <form method="POST" action="update.php">
            <input placeholder="Add an activity" name="activity">
            <input placeholder="Add calories burned" name="calories">
            <input type="submit" value="<< Submit Entries">
        </form>
        
        <div>________________________________________________________</div>
        
<?php

include("password.php");
$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

$column = 'accomplished_on';
if (isset($_REQUEST["sort"])){
    $column = $_REQUEST["sort"];
}

$whitelist = ["accomplished_on" => true, "activity" => true, "calories" => true, "id" => true];
if (!isset($whitelist[$column])) {
	$column = 'accomplished_on';
}

$prepared = $mysql->prepare("SELECT * FROM neko_punch ORDER BY $column DESC;");

$prepared->execute();
$results = $prepared->get_result();

$sumQuery = $mysql->prepare('SELECT SUM(calories) AS sum FROM neko_punch;');
$sumQuery->execute();
$sumResult = $sumQuery->get_result();
$sum = $sumResult->fetch_array();

$maxQuery = $mysql->prepare('SELECT MAX(calories) AS calories FROM neko_punch;');
$maxQuery->execute();
$maxResult = $maxQuery->get_result();
$max = $maxResult->fetch_array();

?>        
        
<br><table width="30%" cellpadding="7">
    
    <div>
    
  <tr>
    <th align="left"><u>Date of entry</u></th>
    <th align="left"><u>Fitness activity</u></th>
    <th align="left"><u>Calories burned</u></th>
  </tr>    
    
    </div>

<?php foreach ($results as $row) { ?>
  <tr>
    <td><?= htmlentities ($row["accomplished_on"]) ?>
    <td><?= htmlentities ($row["activity"]) ?>
    <td><?= htmlentities ($row["calories"]) ?>
<?php } ?>

</table>
        
        <div>________________________________________________________</div>
        <br><div><b>Total calories burned -- </b><?=$sum["sum"] ?></div>
        <br><div><b>Most calories burned in one activity -- </b><?= $max["calories"] ?></div>
        
    </body>

</html>


