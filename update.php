<?php
    
	    include('connection.php');
	     error_reporting(0);
	?>
	
	<!DOCTYPE html>

<html>

<head>
   <title> Update Data </title>
</head>

<body>
   <form action="" method="GET">

   ROLLNO:
     <input type="rollno" name="rollno" value="<?php echo $_GET['rn']?>"/><br><br>
	 Name:
	 <input type="name" name="name" value="<?php echo $_GET['na']?>"/><br><br>
	 Class:
	 <input type="class" name="class" value="<?php echo $_GET['cl']?>"/><br><br>
	 
	 <input type="submit" name="submit" value="Update"><br><br>
	 
	 </form>
	 
	 <?php
	    if($_GET['submit']){
			
			    $rn =$_GET['rollno'];
			    $na =$_GET['name'];
			    $cl =$_GET['class'];
				$query ="UPDATE STUDENT SET NAME ='$na',CLASS ='$cl'WHERE ROLLNO='$rn'";
				$data = mysqli_query($conn,$query);
				if($data){
					echo "Record has been Updated.<a href='display.php'> Check the Updated list</a>";
				}
				
				else{
					echo "<font color='red'>Record not Updated.<a href='display.php'>No record has been Updated </a>";
				}
		}
		    else{
				echo "<font color='green'> Click the button to save the changes ";
			}
				?>
				</body>
				</html>
				
	 

     