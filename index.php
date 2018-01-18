<?php

$conn = new mysqli("localhost","root","", "myosdatabase")or die (mysqli_error());

?>


<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form>
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label> <input type="text" name="uname" placeholder ="User Name"  /><br />
		<label></label> <input type="text" name="email" placeholder= "Email" /><br />
		<label></label> <input type="password" name="pass"  placeholder= "Password"/><br />
		<label></label> <input type="password" name="cpass" placeholder= "Change Pass"/>
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label> <input type="text" name="fname" placeholder= "Fname"/><br />
		<label></label> <input type="text" name="lname" placeholder= "Lname"/><br />
		<label></label> <input type="text" name="contact" placeholder= "Contact Number"/><br />
		<label></label> <textarea rows="2" cols="20" name="address" placeholder= "Address"></textarea><br />
		<label></label> <input type="text" name="city" placeholder= "City"/><br />
		<label></label> <input type="text" name="state" placeholder= "State"/><br />
		<label></label> <input type="text" name="zip" placeholder= "Zip Code"/>
	</fieldset>
	<input type="submit" value="Register" onClick="return submit_form();" />
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>

</body>

</html>