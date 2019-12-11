<style>
td{
	padding:10px;
}
</style>




<?php
   
   include('connection.php');
   error_reporting(0);
   
   $query ="SELECT * FROM STUDENT";
   $data =mysqli_query($conn,$query);
   $total =mysqli_num_rows($data);
   
   if($total!=0){
	   
	   ?>
	   <table>
	    <tr>
	       <th> rollno </th>
	       <th> name </th>
	       <th> class </th>
		   <th colspan="2"> Operations </th>
         </tr>
		 
		 <?php
		    
			while($result =mysqli_fetch_assoc($data)){
				
				echo "<tr>
						<td>".$result['rollno']."</td>	
						<td>".$result['name']."</td>	
						<td>".$result['class']."</td>
						<td> <a href='update.php?rn=$result[rollno]&na=$result[name]&cl=$result[class]'> Edit </a></td>
						<td> Delete </td>
                      </tr>";
			}
   }
       else{
		   echo "no result found";
	   }
	   ?>
	   </table>
		   
   
  
   
    