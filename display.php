<?php
   include("connection.php");
   error_reporting(0);
   $query ="SELECT * FROM STUDENT";
   $data =mysqli_query($conn,$query);
   $total =mysqli_num_rows($data);
   
   if($total !=0){
	   
	   ?>
	   
	   <table>
	    <tr>
	       <th> Rollno </th>
	       <th> Name </th>
	       <th> class </th>
		   </tr>
		   <?php
		   while($result =mysqli_fetch_assoc($data)){
			   
			   echo "<tr>
			      <td>".$result['rollno']."</td>
			       <td>".$result['name']."</td>
			        <td>".$result['class']."</td>
					</tr>";
		   }
   }
		   
		   else{
			   echo "no records found";
   }
   
   ?>
   </table>
   
    