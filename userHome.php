<!-- Home page for user. -->
<?php
	foreach ($_POST as $key=>$val) {
		$sql .="{$key} = '{$val}', ";
	}
?>
<?php
	include('includes/header.php');
?>
<br>
<div id="formstyle">
	<h3>Welcome <?php echo $_POST['username']; ?> </h3>

	<p>Take a survey to add your project point and information to the map</p>
	<button class="btn switch-list "><a href="survey.php" style="color: black; text-decoration: none">Survey</a></button>
</div>
