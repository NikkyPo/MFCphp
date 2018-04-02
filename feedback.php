<?php
	include('includes/header.php');
?>

<br>
<br>
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
		$like = trim($_POST['like']);
		$dislike = trim($_POST['dislike']);
		$useful = trim($_POST['useful']);

		// Check if $variables have header injections

		if (has_header_injection($dislike) || has_header_injection($useful)) {

			die(); // if true, kill scripts
		}
		//add the recipient email to a variable
		$to = "sparky4real@gmail.com";
		$subject = "You were sent feedback";

		//actual message
		$message = "Connection: $connection\r\n";
		$message .="Rating: $rating\r\n";
		$message .="Use: $use\r\n";
		$message .="Liked it?: $like\r\n";
		$message .="Didn't like: $dislike\r\n";
		$message .="Useful?: $useful\r\n";	

		$message = wordwrap($message, 72);

		//set mail headers - required

		$headers = "MIME-Version: 1.0\r\n";
		$headers .="Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .="From: FoodCharter@gmail.com\r\n";
		$headers .="X-MSMail-Priority: High\r\n\r\n";

		//send email
		mail($to, $subject, $message, $headers);

?>
<h3><b>Thanks for your feedback<b></h3>
<p><a href="foodcharter_demo/index.php" class="button block">&laquo; Go to Map</a></p>

<!-- here need to include some html to show success, so need to wrap sending mail with new php. -->
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
	    <input id="points" type="checkbox" name="use" value="1"><br>
	    <label for="view">Viewed datapoints on the map.</label>
	    <input id="view" type="checkbox" name="use" value="2"><br>
	    <label for="find">Zoomed in and out on the map</label>
	    <input id="find" type="checkbox" name="use" value="3"><br>
	    <label for="look">Looked at the About section</label>
	    <input id="look" type="checkbox" name="use" value="4"><br>
	    <label for="other">Other:</label>
	    <input id="other" type="text" name="use">
	</div>
	<br>

	<div>
		<h5>4. What did you like about the map?<br>
			<input type="text" placeholder="" name="like" required>
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

	<input type="submit" name="contact_submit" value="Submit" class="btn switch-list"> <!-- If button is last in form, it will be a submit button -->
</form>

<?php } ?>
<hr>
</div>
