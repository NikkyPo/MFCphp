<?php
	include('includes/header.php');
?>

<div id="formstyle">
	<form method="POST" action="userHome.php">
		<h3><strong>Log In</strong></h3>  
	 	<p>Once logged in you will be able to add and edit data in the Minnesota Food Charter map.</p>
	 	<br>
		<div>
			<label for="username">Username</label>
			<input id="username" type="text" placeholder=" username" name="username" required><br><br>
			<label for="passwords">Password</label>
	        <input pattern=".{5,20}" required title="5 to 20 characters" id="passwords" type="password" placeholder=" password" name="password" required>
	    </div>
	    <br>
	    	<button class="btn switch-list">Sign In</button>

	</form>
</div>

<div id="formstyle">
    <p>Not registered yet?
    <button class="btn switch-list" type="button" id="formButton">Create Account</button></p>

	<form id="createAccount" class="hidden" method="POST" action="account/userHome.php">
	<h3><strong>Create Account</strong></h3><br>
	<div class="form-group">
		<label for="firstName" class="control-label">
			First Name  <input class="form-control" type="text" name="firstName" id="firstName" required placeholder="First Name">
		</label>
	</div>
	<div class="form-group">
		<label for="lastname" class="control-label">
			Last Name  <input class="form-control" type="text" name="lastname" id="lastname" required placeholder="Last Name">
		</label>
	</div>
	<div class="form-group">
		<label for="email" class="control-label">
		Email  <input class="form-control" type="text" maxlength="100" placeholder="Email" id="email" name="email" required>
		</label>
	</div>
		<div class="form-group">
			<label for="newusername" class="control-label">Username
			<input class="form-control" id="newusername" type="text" placeholder="Username" name="newusername" maxlength="20" required>
		</label><br><br>
			<label for="newpassword" class="control-label">Password
	        <input class="form-control" pattern=".{5,20}" required title="5 to 20 characters" id="newpassword" type="password" placeholder="Password" name="newpassword" maxlength="20" required>
	    </label>
	    </div>
	    <br>
		<button class="btn switch-list" type="button" id="submit">Finish</button>
	</form>
<div>

<script>
	$(document).ready(function(){
	    $("#formButton").click(function(){
	        $("#createAccount").toggleClass("hidden");
	    });
	});

</script>