<?php

$variable = "text";

/*Super Globals (php makes it for you, and they exist everywhere)
$_SERVER - server-specific information
$_COOKIE - all the cookies that are assigned
$_REQUEST - URL parameters or form submission
$_FILES - files that are uploaded
$_SESSION
*/

//echo $_SERVER;

//print_r($_SERVER);
//print_r($_REQUEST);

$name = htmlentities($_REQUEST["name"]);
if ($name == "Chris") {
	$name = "The Incredible Chris";
	}
	
//Sanitization:
//htmlentities ()
	
if (isset($_REQUEST["last_name"])) {
	$last_name = $_REQUEST["last_name"];
} else {
	$last_name = "Moreno";
	}
	
?>
<!doctype html>
<html>
	<body>
		Hello, 
			<?php echo $_REQUEST["name"]; ?>
			<!-- <?= $_REQUEST["last_name"]; ?>! -->
			<?= htmlentities($last_name); ?>!
			
			<form method="post">
				<input name="comment">
				<input type="hidden" value="123"
		name="nonce">
				<button>Submit</button>
			</form>
<?php

if (isset($_REQUEST["comment"])) {
	echo $_REQUEST["comment"];
}

?>
<?php /*
			 <?php  echo $name ?>
			 <?=  $last_name ?>!
*/
?>
			   
	</body>
	
<!--- != not equal
== equal
<= less than or equal
>= greater than or equal
< less than
> greater than --->

</html>