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
		<input required  type="text"   value="" name = "UCID" placeholder="UC 6+2 id">
		<input required  type="text"   value="" name = "fname" placeholder="First Name">
		<input required  type="text"   value="" name = "lname" placeholder="Last Name">
		<select name = "gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		<input required  type="email"  value="" name = "email" placeholder="Email">
		<input required  type="text"   value="" name = "wish"  placeholder="wishlist">
		<input type="Comments"   value="" name = "Comments"  placeholder="comments(optional)">
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
	$wish     = $_POST["wishlist"];
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
    		echo "Thanks for Your Submission!! Don't forget to see matches";
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
            	 echo "<table border =1 CELLPADDING=10>";
				//while($row = mysql_fetch_array($result)){$row = $result->fetch_assoc()
            	 echo "<tr><th>". ID ."</th><th>". BearcatID ."</th><th>".First_Name."</th><th>". Last_Name ."</th><th>". Gender ."</th><th>". Email ."</th><th>". Wishlist ."</th><th>".  Comments ."</th></tr>";   
            	 $count = 0;
				while($row    = $result->fetch_assoc())  {				
  					
  					$count++;
  					$id 	= $row['id'];

  					$ucid     = $row['UCId'];
  					$fname    = $row['FirstName'];
  					$lname    = $row['LastName'];
  					$email    = $row['Email'];
  					$gender   = $row['Gender'];
  					$comments = $row['Comments']; 
  					$wishlist =	$row['Wish']; 
  					echo "<tr><td>" .$id. "</td><td>".$ucid."</td><td>".$fname."</td><td>".$lname."</td>
  					<td>".$gender."</td><td>".$email."</td><td>".$wishlist."</td><td>".$comments."</td></tr>";   
					}
 					echo "</table>";
 		 			} else {
                 echo "0 results"; }
             
             $conn->close();

         ?>
<br/>
<form id = "" name = "" action="match.php" method="POST" >
	<input type="submit" name="match" value="Show Matches">
</form>

	
</style>
</body>
