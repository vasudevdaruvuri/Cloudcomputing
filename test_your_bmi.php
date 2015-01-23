<!doctype html>
<head>
	<meta charset="utf-8">
	<title> BMI Caluculator </title>
	<script type="text/javascript">

	</script>
	<style type="text/css" media="screen">

		
	</style>
</head>
<body >
	<h2> BMI Caluculator </h2>
	<form action=" " method="post" accept-charset="utf-8">
		<br>
		Please enter your data: <br>
		<br>
		Your Height (cms) : <input type="text" name="Height" value="" placeholder=" Height in centimeters" required> <br>
        <p></p>
		Your Weight (kgs): <input type="text" name="Weight" value="" placeholder=" Weight in KGs" required><br>
		<p></p>
		Caluculate BMI : <input type="submit" name="" value=" Submit">	
	</form>
	<!--
	<?php
	
	#echo "My first PHP fdsscript!"; 
	
	?>
	-->
	<?php 
	   
	  
		


     $Height =  $_POST["Height"]/100; 
     $Weight =  $_POST["Weight"]; 
     #
     #echo $Height; 
     #echo $Weight;
     ?>
     
	<br>
	 Your Height is : <?php echo $_POST["Height"]; ?> cms<br>
     Your weight is : <?php echo $_POST["Weight"]; ?> kgs<br>
    
    <?php
     $BMI = round($Weight / ($Height * $Height),2)  ;
     #$BMI = ( $Weight / ( $Height x $Height  ) );

     #$variableName = 'Ralph';
     #echo "<br> Your BMI is : ".$BMI.'!';
     #echo "<br> Your BMI is : ".$BMI.;  
    
     if ($BMI < "18") 
	{
 		echo "<br> Your BMI is " .$BMI. "! This means you are under weight ";

	} elseif  ($BMI < "18.5") {
		echo "<br> Your BMI is " .$BMI. "! This means you are thin for your height. ";
	} elseif  (($BMI > "18.5") && ($BMI < 24.9))
  	{
		echo "<br> Your BMI is " .$BMI. "! This means you are you are at a healthy weight. ";
  	}
  	elseif  (($BMI >= "25") && ($BMI <= 29.9))
  	{
		echo "<br> Your BMI is " .$BMI. "! This means you are overweight for your height. ";
 	 }
  	elseif  (($BMI >= "30") )
  	{
		echo "<br> Your BMI is " .$BMI. "! This means you are obesity. If you are obese, consider consulting a doctor or losing weight. ";
  	}

  	 if (isset($_POST['Height']))
	 {
		echo "<br> on";
	    unset($_POST['Height']);
		#<script type="text/javascript">
		#location.reload();
		#</script>';
		}



  	?>

</body>