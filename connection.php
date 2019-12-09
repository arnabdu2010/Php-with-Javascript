<?php

    $Servername ="localhost";
	$Username ="root";
	$Password ="";
	$dbname ="web";
	
	$conn = mysqli_connect($Servername,$Username,$Password,$dbname);
	
	if($conn){
		echo "Connection Ok";
	}
	else{
		die("Connection not established".mysqli_connect_error());
	}
	






?>