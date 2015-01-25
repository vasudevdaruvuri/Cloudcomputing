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
	<h1  > Secret Santa Generator</h1>
	<form id="form1" name="form1" method="post" action="">
		<input required  type="text"   value="" name = "UCID" placeholder="Your UC ID Number">
		<input required  type="text"   value="" name = "fname" placeholder="First Name">
		<input required  type="text"   value="" name = "lname" placeholder="Last Name">
		<select name = "gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		<input required  type="email"  value="" name = "email" placeholder="Email">
		<input required  type="text"   value="" name = "wish"  placeholder="Please make a Wish">
		<input type="Comments"   value="" name = "Comments"  placeholder="About Your Self / Comments">
		<input type="submit" name="submit" value=" Submit">	
	</form>
	<br> <br>
     
  
	<?php
	if (isset($_POST["submit"])) {

    ?>


	<?php
	$ucid = $_POST["UCID"];
	$fname    = $_POST["fname"];
	$lname    = $_POST["lname"];
	$email    = $_POST["email"];
	$gender   = $_POST["gender"];
	$wish     = $_POST["wish"];
	$comments = $_POST["Comments"];


    // <?php 
      $servername = "localhost";
	  $username   = "root";
	  $password   = "";
		$dbname   = "secretsanta";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			} 
	

			$sql = "INSERT INTO SecretSanta(UCid, FirstName, LastName, Gender, Email, Wish, Comments) VALUES('$ucid', '$fname', '$lname' ,'$gender','$email','$wish','$comments');";

			if ($conn->query($sql) === TRUE) {
    		echo "Thanks for Your Submission!! Your wish stored Successfully. Wait for it to be fullfilled";
			} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close(); }
	  ?>
    

         <?php
			 $servername = "localhost";
			 $username   = "root";
			 $password   = "";
			 $dbname     = "secretsanta";

             // Create connection
             $conn = new mysqli($servername, $username, $password, $dbname);
             // Check connection
             if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
             } 
            
             
             $sql = "SELECT * from  SecretSanta;";
             $result = $conn->query($sql);//UCId FirstName LastName  
             if ($result->num_rows > 0) {
            	 echo "<h3> List of Entries </h3>";
            	 echo "<table border =1 >";
				//while($row = mysql_fetch_array($result)){$row = $result->fetch_assoc()
            	 echo "<tr><th>". COUNT ."</th><th>". UCID ."</th><th>".First_Name."</th><th>". Last_Name ."</th><th>". Email ."</th><th>". Comments ."</th><th>". Gender ."</th></tr>";   
            	 $count = 0;
				while($row    = $result->fetch_assoc())  {				
  					
  					$count++;

  					$ucid     = $row['UCId'];
  					$fname    = $row['FirstName'];
  					$lname    = $row['LastName'];
  					$email    = $row['Email'];
  					$gender   = $row['Gender'];
  					$comments = $row['Comments']; 
  					echo "<tr><td>" .$count. "</td><td>".$ucid."</td><td>".$fname."</td><td>".$lname."</td><td>".$email."</td><td>".$comments."</td><td>".$gender."</td></tr>";   
					}
 					echo "</table>";
 		 			} else {
                 echo "0 results"; }
             
             $conn->close();

         ?>

</body>
