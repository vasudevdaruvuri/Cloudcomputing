<!doctype html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript">

	</script>
	<style type="text/css" media="screen">

		
	</style>
	<?php
		// Turn off all error reporting
	error_reporting(0);
	?>
</head>
<body >
	<h3  > Secret Santa generator</h3>
	<form id="form1" name="form1" method="post" action="">
		<input required  type="text"  value="" name="fname" placeholder="First Name">
		<input required   type="text"  value="" name = "lname" placeholder="Last Name">
		<input required  type="email"  value="" name = "email" placeholder="Email">
		<select name = "gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		<input type="submit" name="" value=" Submit">	
	</form>
	<br> <br>

	<?php
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	echo "$fname";
	echo $lname;
	echo $email;
	echo $gender;
    
	?>
	<h3>People Who have registered. </h3>

	<table border="1">
		<caption>Available Entries</caption>
		<thead>
			<tr>
				<th>First Name</th><th>Last name</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Vasudev</td><td>FPC</td>
			</tr>
			<tr>
				<td>Vasudev</td><td>FPC</td>
			</tr>
			<tr>
				<td>Vasudev</td><td>FPC</td>
			</tr>
			<tr>
				<td>Vasudev</td><td>FPC</td>
			</tr>
		</tbody>
	</table>
</body>
