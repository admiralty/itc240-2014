<!doctype html>
<html>
        <body>
                <h1>Seattle Parks</h1>
                    <div>
                    <?= count($parks); ?> parks reviewed.
                    </div>
                <br>
                <a href="?show=ratings">List by Highest Rated</a> / 
                <a href="?show=all">List Alphabetical</a>
                    
<?php

foreach ($parks as $park) {
        if ($show == "ratings") {
                include("ratings.php");
        } else {
                include("alphabetical.php");
        }
}

?>
          
        </body>
</html>