<?php

include("password.php");

$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

$parksReviewed = $mysql->query("SELECT COUNT(*) AS rows FROM parks;");
$reviewed = $parksReviewed->fetch_array();

//$parksReviewed->execute();
//$reviewedResult = $parksReviewed->get_result();

?>

<!doctype html>
<html>
        <body>
                <h1>Seattle Parks Review</h1>
                    <div>
                    <?= $reviewed["rows"] ?> parks reviewed.
                    </div>
            
<!-- $prepared = $mysql->prepare("SELECT * FROM parks ORDER BY Rating DESC;"); -->

<form method="POST" action="update.php">
    Add a review: 
    <input placeholder="Park Name" name="Name">
    <input placeholder="Neighborhood" name="Neighborhood">
    <input placeholder="Rating" name="Rating">
    <input placeholder="Review" name="Review">
    <input type="submit" value="Submit Park">
</form>
        
       <!-- <div>____________________________________</div> -->
            
            
                <br>
                <a href="?sort=ratings">Highest Rated</a> | 
                <a href="?sort=alphabetical">Alphabetical</a>
            
<?php

/*

foreach ($park_list as $park) {
        if ($show == "ratings") {
                include("ratings.php");
        } else {
                include("alphabetical.php");
        }
}

*/

?>
          
        </body>
</html>
