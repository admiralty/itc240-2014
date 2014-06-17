<?php

//$park_list = [
//];

include("header.php");
     
//$park_list = $mysql->query('SELECT * FROM parks ORDER BY Rating DESC;');
//$park_query = $mysql->prepare("SELECT * FROM parks;");
//$park_query->execute();
//print_r($park_list); //KEEP THIS COMMENTED OUT EVEN IF REMOVE OTHER COMMENTS

$main_info = 'Rating';
if (isset($_REQUEST["sort"])){
    $main_info = $_REQUEST["sort"];
}
$main_info = $mysql->real_escape_string($main_info);

$whitelist = ["Name" => true, "Neighborhood" => true, "Rating" => true, "Review" => true];

if (!isset($whitelist[$main_info])) {
    $main_info = 'Rating';
}

$prepared = $mysql->prepare("SELECT * FROM parks ORDER BY Rating DESC;");
$prepared->execute();
$park_results = $prepared->get_result();

foreach ($park_results as $info) {
?>

    <ul type="circle">
		<li><b><?= htmlentities ($info["Rating"]) ?>/10</b></li>
        <li><?= htmlentities ($info["Name"]) ?></li>
		<li><i>Neighborhood : </i><?= htmlentities ($info["Neighborhood"]) ?></li>
		<li><i>Review : </i><?= htmlentities ($info["Review"]) ?></li>
        <li><a href="?update=<?= $row["ID"] ?>">Edit</a>
        <li><a href="?delete=<?= $row["ID"] ?>">Delete</a>
	</ul>
<?php
}
?>