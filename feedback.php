<!-- Webpage to leave feedback about experience. Form is sent to database in pgadmin -->
<?php
	include('includes/header.php');

	$db = pg_connect('host=localhost port=5432 dbname=foodcharter user=postgres password=postgres');
	$query = "INSERT INTO feedback_form VALUES ('$_POST[rating]', '$_POST[connection]', '$_POST[use1]', '$_POST[use2]', '$_POST[use3]','$_POST[use4]', '$_POST[likes]', '$_POST[dislike]', '$_POST[useful]')";
	$result = pg_query($query);

?>

<div id="formstyle">
	<br>

<?php
	// Check for header injection

	function has_header_injection($str) {
		return preg_match("/[\r\n]/", $str);
	}

	if (isset($_POST['contact_submit'])) {

		$connection = trim($_POST['connection']);
		$rating = $_POST['rating'];
		$use = $_POST['use'];
		$likes = trim($_POST['likes']);
		$dislike = trim($_POST['dislike']);
		$useful = trim($_POST['useful']);

		// Check if $variables have header injections

		if (has_header_injection($dislike) || has_header_injection($useful)) {

			die(); // if true, kill scripts
		}
?>
<h3><b>Thanks for your feedback<b></h3>
<p><a href="index.php" class="button block">&laquo; Go to Map</a></p>

<?php } else { ?>

<form method="post" action="" id="contact-form" class="mapfont">
	<div>
	<h3><b>Thank you for visiting! We are seeking rigorous feedback at the stage so that we can make improvements to this brand new tool.
		<b></h3>
		<h5>1. Please describe your connection to food systems in Minnesota and / or the Minnesota Food Charter Network.
			<br>
			<input type="text" placeholder="" name="connection" required>
		</h5>
	</div>
	<br>

	<div>
		<h5>2. How would you rate your experience using the map today?
		</h5>
		<label for="poor">Poor</label>
		<input id="poor" type="radio" name="rating" value="1">
		<br>
		<label for="average">Average</label>
	    <input id="average" type="radio" name="rating" value="2">
	    <br>
	    <label for="good">Good</label>
	    <input id="good" type="radio" name="rating" value="3">
		<br>
	    <label for="excellent">Excellent</label>
	    <input id="excellent" type="radio" name="rating" value="4">
	</div><br>

	<div>
		<h5>3. How did you use the map today?</h5>
		<label for="points">Added my work to the map using the survey</label>
	    <input type="checkbox" name="use1" value="1"><br>
	    <label for="view">Viewed datapoints on the map.</label>
	    <input type="checkbox" name="use2" value="2"><br>
	    <label for="find">Zoomed in and out on the map</label>
	    <input type="checkbox" name="use3" value="3"><br>
	    <label for="look">Looked at the About section</label>
	    <input type="checkbox" name="use4" value="4"><br>
	</div>
	<br>

	<div>
		<h5>4. What did you like about the map?<br>
			<input type="text" placeholder="" name="likes" required>
		</h5>
	</div><br>

	<div>
		<h5>5. What did you NOT like about the map?<br><input type="text" placeholder="" name="dislike" required>
		</h5>
	</div><br>

	<div>
		<h5>6. How could the map be more useful to you?<br><input type="text" placeholder="" name="useful" required>
		</h5>
	</div><br>

	<input type="submit" name="contact_submit" value="Submit" class="btn switch-list">
</form>

<?php } ?>
<hr>
</div>
