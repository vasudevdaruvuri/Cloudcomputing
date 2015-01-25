<!-- <img src="http://www.splanic.com/wp-content/uploads/2014/11/placeholder-header-720px.png" width="250" alt="" style="text-align:centre"> -->
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
             $revsql = "SELECT * from  SecretSanta ORDER by id DESC;";
             $result = $conn->query($sql);//UCId FirstName LastName 
             $reverseResult = $conn->query($revsql);//UCId FirstName LastName 
             if ($result->num_rows > 0) {
            	 echo "<div  ><table border =1 CELLPADDING=10 style = \"float:left\">"
            	 ?>
            	 <tr><th>Santa</th></tr>
            	 <?php 

				while($row= $result->fetch_assoc())  {				

  					$fname    = $row['FirstName'];
  					$lname    = $row['LastName'];
  					echo "<tr><td>".$fname. " ". $lname ."</td></tr>";  
					}
 					echo "</table>";
 		 			} else {
                 echo "0 results"; }
              if ($reverseResult->num_rows > 0) {
            	 echo "<table border =1 CELLPADDING=10>";
            	 ?>
            	 <tr><th>Person</th></tr>
            	 <?php 

				while($revRow= $reverseResult->fetch_assoc())  {				

  					$fname    = $revRow['FirstName'];
  					$lname    = $revRow['LastName'];
  					echo "<tr><td>".$fname. " ". $lname ."</td></tr>";   
					}
 					echo "</table> </div>";
 		 			} else {
                 echo "0 results"; }
             
             $conn->close();

         ?>