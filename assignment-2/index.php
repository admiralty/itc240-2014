<!doctype html>
<html>
<?php
	$method = $_SERVER["REQUEST_METHOD"];
	//echo $method;
	
	if ($method == "GET") {
?>

	<pre>
	<form method="post">
	<b>Mad Lib Skills (I got)</b>
	
	
	
	<input name="noun" placeholder="noun">

	<input name="verb" placeholder="past tense verb">
		
	<input name="adjective" placeholder="adjective">
		
	<input name="number_ten" placeholder="number from 1-10">
		
	<input name="number_five" placeholder="number from 2-5">
	
	<button> Mad Lib </button>
	</form>
	</pre>
	
<?php
} else {
?>

	<?php //print_r($_REQUEST); ?>
	<pre>
	<form>
	<b>Mad Lib Skills (You got)</b>
	
	
	
	Blair went with his <b><?= htmlentities($_REQUEST["noun"]) ?></b> around noon to eat lunch.
	
	After lunch, he <b><?= htmlentities($_REQUEST["verb"]) ?></b> all the way to the restroom.
	
	A couple of hours later, he went to the track to ride his <b><?= htmlentities($_REQUEST["adjective"]) ?></b> bike.
	
	He did <b><?= htmlentities($_REQUEST["number_ten"]) ?></b> laps around the course. <?php $number = $_REQUEST["number_ten"]; if ($number == 8) { ?><b>(He liked to ride naked.)</b> <?php } ?>
	
	
	Even then, his <?php $numbers = $_REQUEST["number_five"]; if ($numbers >= 4) { ?><b>rumpelstiltskin</b><?php } else {?><b>booty</b><?php } ?> did not hurt from sitting for <b><?= htmlentities($_REQUEST["number_five"]) ?></b> hours.
	
	</pre>

<?php
}
?>
	


	<!-- <form>
	Blair went into the <input name="noun" placeholder="noun"> around noon to eat lunch.
	</form>
	<form>
	After lunch, he <input name="verb" placeholder="past tense verb"> all the way to the restroom. 
	</form>
	<form>
	A couple of hours later, he went outside to ride his <input name="adjective" placeholder="adjective"> bike. 
	</form>
	<form>
	He did <input name="number 10" placeholder="number from 1-10"> laps on the course. (He always rode his bike naked.)
	</form>
	<form>
	Though, his butt / booty / ass / rumpelstiltskin did not hurt from sitting for <input name="number 20" placeholder="number from 1-20"> minutes. 
	</form> -->
	
	
</html>



















