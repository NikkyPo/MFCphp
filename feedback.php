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
<br><h4><b>Thanks for your feedback<b></h4>
<p><a href="index.php" class="button block">&laquo; Go to Map</a></p>

<?php } else { ?>

<form method="post" action="" id="contact-form" class="mapfont">
<br>
	<h3><strong>Feedback</strong></h3>
	<h4>Please complete the form to help us make improvements.</h4><br>
		<div>
		<label for="connection" class="control-label"><strong>Please describe your connection to food systems in Minnesota and / or the Minnesota Food Charter Network.</strong>
			<input class="form-control" type="text" placeholder="" name="connection" required>
		</label>
	</div>
	<br>

	<div>
		<label class="control-label"><strong>How would you rate your experience using the map today?</strong><br>
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
		</label>
	</div><br>

	<div>
		<label class="control-label"><strong>How did you use the map today?</strong><br>
		<label for="points">Added my work to the map using the survey</label>
	    <input type="checkbox" name="use1" value="1"><br>
	    <label for="view">Viewed datapoints on the map.</label>
	    <input type="checkbox" name="use2" value="2"><br>
	    <label for="find">Zoomed in and out on the map</label>
	    <input type="checkbox" name="use3" value="3"><br>
	    <label for="look">Looked at the About section</label>
	    <input type="checkbox" name="use4" value="4"><br>
		</label>
	</div>
	<br>
	<div>
		<label for="likes" class="control-label"><strong>What did you like about the map?</strong><br>
			<input class="form-control" type="text" placeholder="" name="likes" required>
		</label>
	</div><br>

	<div>
		<label class="control-label"><strong>What did you NOT like about the map?</strong><br>
		<input class="form-control" type="text" placeholder="" name="dislike" required>
		</label>
	</div><br>

	<div>
		<label class="control-label"><strong>How could the map be more useful to you?</strong><br>
		<input class="form-control" type="text" placeholder="" name="useful" required>
	</label>
	</div><br>

	<input type="submit" name="contact_submit" value="Submit" class="btn switch-list">
</form>

<?php } ?>
<hr>
</div>

<style>

label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: normal;
}
</style>
