<?php

//$parks = [
//];
     
include("page.php");

$park_list = $mysql->query('SELECT * FROM parks ORDER BY Rating DESC;');
$park_query = $mysql->prepare("SELECT * FROM parks;");
$park_query->execute();
//print_r($park_list);

?>

	
<?php
foreach ($park_list as $row) {
?>

	<ul type="circle">
		<li><b><?= $row["Rating"] ?>/10 -- </b><?= $row["Name"] ?></li>
		<li><i>Neighborhood : </i><?= $row["Neighborhood"] ?></li>
		<li><i>Review : </i><?= $row["Review"] ?></li>
	</ul>
		
        
<?php
}
?>