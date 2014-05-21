<!doctype html>
<html>
        <body>
                <h1>Seattle Parks</h1>  
                <h3>(sorted by highest rated)</h3>
                        
<?php

include("password.php");

$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

//*work on this part*
$result = $mysql->query('SELECT * FROM parks ORDER BY Rating DESC;');

$query = $mysql->prepare("SELECT * FROM parks;");

$query->execute();

?>

<table>
    <div>
        <tr>
        <td><b><u>Name</u></b>&nbsp;
        <td><b><u>Neighborhood</u></b>&nbsp;
        <td><b><u>Rating out 10</u></b>&nbsp;
        <td><b><u>Review</u></b>&nbsp;
        
    </div>
        
<?php
foreach ($result as $row) {
?>
    
            
    <tr>
        <td><b><?= $row["Name"] ?></b>
        <td><?= $row["Neighborhood"] ?>
        <td><?= $row["Rating"] ?>
        <td><?= $row["Review"] ?>
        
<?php
}
?>
</table>
    
        </body>
</html>