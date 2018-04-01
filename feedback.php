<?php
	include('includes/header.php');
?>
<div id="formstyle">
<form class="mapfont">
	<br>
	<br>
	<h4>Thank you for visiting! We are seeking rigorous feedback at the stage so that we can make improvements to this brand new tool.
	</h4>
	<br>

	<div>
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

<button class="btn switch-list">Submit</button> <!-- If button is last in form, it will be a submit button -->
</form>
</div>
