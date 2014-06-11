<?php
    
include("password.php");
$mysql = new mysqli("localhost", "cmoren03", $mysql_password, "cmoren03");

//$libraryQuery = $mysql->prepare("SELECT * FROM library;");

$sort = "title";
if (isset($_COOKIE["sort"])) {
    $sort = $_COOKIE["sort"];
}

if (isset($_REQUEST["sort"])) {
    $sort = $_REQUEST["sort"];
    setcookie("sort", $sort, time() + 60 * 60 * 24 * 30, "/");
}

$sortWhitelist = [
        "title" => true,
        "author" => true
    ];

if (!isset($sortWhitelist[$sort])) {
    $sort = "title";
}

$libraryQuery = $mysql->prepare("SELECT * FROM library ORDER BY $sort ASC;");
$libraryQuery->execute();
$library = $libraryQuery->get_result();
//print_r($library);

?>

<!doctype html>
    <html>
        <head>
            <title>
            Public Library of the Shire
            </title>
        </head>
        <body>
            <h1>Public Library of the Shire</h1>
            <h3>Online Catalogue</h3>
<div>__________________________________________________________________________________________________________________________________________________________</div>
<pre><div>List View | <a href="cover_view.php">Cover View</a>                                                                                                                             <a href="cover_view.php">White</a>|<a href="cover_view.php">Black</a></div></pre>
            
            <table width="100%" cellpadding="25">
                <th>
                <th><a href="?sort=title">Title</a>
                <th><a href="?sort=author">Author</a>
                <th>Book Description
                <th>
            <tbody>
<?php   
foreach ($library as $book) {
?>
            <tr>
                <td align="center">
                    <img src="<?= htmlentities($book["cover"]) ?>" width=40>
                <td align="center"><?= htmlentities($book["title"]) ?>
                <td align="center"><?= htmlentities($book["author"]) ?>
                <td align="left"><?= htmlentities($book["descr"]) ?>
                <td align="center"><form method="POST" action="update.php"><input type="submit" value="Borrow"></form>
<!--COME BACK TO THIS ABOVE IF TIME-->
<?php
}

?>
  
            
        </body>

</html>