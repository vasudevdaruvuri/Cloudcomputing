<!doctype html>
<head>
  <meta charset="utf-8">
  <title></title>
  <script type="text/javascript">

  </script>
  <link rel="stylesheet" href="styles.css"> 
  <?php
    // Turn off all error reporting
  error_reporting(0);
  ?>
</head>
<body >
  <div class="wrap">
    <div class="title-area">
      <h1 class="site-title" itemprop="headline">SecretSanta</h1>
      <h3 class="site-description"><span>Because Suprises are fun</span></h3>
    </div>
  </div>
<div class="resultcontainer">
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

 $array = array();
 $match = array();
 $sql = "SELECT * from  SecretSanta;";
 $revsql = "SELECT * from  SecretSanta ORDER by id DESC;";
  $result = $conn->query($sql);//UCId FirstName LastName 
  $reverseResult = $conn->query($revsql);//UCId FirstName LastName 

  

  if ($result->num_rows > 0) {

    while($row= $result->fetch_assoc())  {	
      array_push($array, $row['FirstName']);			
    }



  // array_push($match, array('Password' => 'pass'));
    echo "<div  class = 'result'><table class = 'matchmaker santared' border =1 CELLPADDING=10 >";
    echo " <tr><th>Santa</th><th>Match</th></tr>";
    $orignalArray = $array;

    shuffle ( $array );

    foreach (array_combine($orignalArray, $array) as $name => $match) {
      echo "<tr><td>".$name. "</td><td> ". $match ."</td></tr>"; 
    }
    echo "</table>";

  } else {
   echo "0 results"; }

   $conn->close();

   ?>
   </div>
<div style="clear:both">
   <button onclick="location.href = 'secretsanta.php';" id="myButton" class="float-left submit-button" >Go Back</button>
</div>
</body>