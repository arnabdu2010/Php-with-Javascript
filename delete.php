<?php
    
	
	include('connection.php');
	error_reporting(0);
	$rollno = $_GET['rn'];
	$query ="DELETE FROM STUDENT WHERE ROLLNO='$rollno'";
	$data =mysqli_query($conn,$query);
	
	if($data){
		echo  "Data Delete from table";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/Pratice/display.php">
	<?php
	
	
	}
	else{
		echo "DELETE CONNECTION FAILED";
	}

?>