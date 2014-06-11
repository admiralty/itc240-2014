<?php

include("password.php");

$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

?>

<!doctype html>
<html>
        <body>
                <h1>Seattle Parks</h1>
                    <div>
                    <?= count($park_list); ?> parks reviewed.
                    </div>
                <br>
                <a href="?show=ratings">Highest Rated</a> | 
                <a href="?show=alphabetical">Alphabetical</a>
                    
<?php

foreach ($park_list as $park) {
        if ($show == "ratings") {
                include("ratings.php");
        } else {
                include("alphabetical.php");
        }
}

?>
          
        </body>
</html>
