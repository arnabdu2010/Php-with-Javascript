<?php

    include("connection.php");
	error_reporting(0);
	?>
	
<!DOCTYPE html>

<html>
<head>
<title> Insert data </title>
</head>

<body>
   <form action="" method="GET">
        ROLLNO:
		<input type="rollno" name="rollno" value=""/><br><br>
		NAME:
		<input type="name" name="name" value=""/><br><br>
		Class:
		<input type="class" name="class" value=""/><br><br>
		
		<input type="submit" name="submit" value="submit"><br><br>
		
    
<?php
    if($_GET['submit']){
				$rn =$_GET['rollno'];
				$na =$_GET['name'];
				$cl =$_GET['class'];
				
				if($rn!="" && $na!="" && $cl!=""){
					echo "data has been inserted";
				}
	}
	else{
		  echo "data has not been inserted";
	}
	?>
	</form>
	</body>
	</html>
   
	