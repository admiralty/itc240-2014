<?php

//$park_list = [
//];

function get_something($some, $thing) { 
	$value = $thing;
	if (isset($_REQUEST[$some])) { 
	$value = $_REQUEST[$some]; 
	}
	return $value;
}

include("header.php");
     
//$park_list = $mysql->query('SELECT * FROM parks ORDER BY Rating DESC;');
//$park_query = $mysql->prepare("SELECT * FROM parks;");
//$park_query->execute();
//print_r($park_list); //KEEP THIS COMMENTED OUT EVEN IF REMOVE OTHER COMMENTS

/*$main_info = 'Rating';
if (isset($_REQUEST["sort"])){
    $main_info = $_REQUEST["sort"];

}

$main_info = $mysql->real_escape_string($main_info);
*/

//$sort = $mysql->real_escape_string($sort);

$sort = get_something("Name", "Ratings");

$whitelist = ["Name" => true, "Rating" => true];

if (!isset($whitelist[$sort])) {
    $sort = 'Rating';
}

$prepared = $mysql->prepare("SELECT * FROM parks ORDER BY $sort DESC;");
$prepared->execute();
$park_results = $prepared->get_result();

foreach ($park_results as $info) {
?>

    <ul type="circle">
		<li><b><?= htmlentities ($info["Rating"]) ?>/10</b></li>
        <li><b><?= htmlentities ($info["Name"]) ?></b></li>
		<li><i>Neighborhood : </i><?= htmlentities ($info["Neighborhood"]) ?></li>
		<li><i>Review : </i><?= htmlentities ($info["Review"]) ?></li>
        <li><a href="?update=<?= $row["ID"] ?>">Edit</a>
        <li><a href="?delete=<?= $row["ID"] ?>">Delete</a>
	</ul>
<?php
}
?>