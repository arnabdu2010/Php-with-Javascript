<?php

   include("connection.php");
   error_reporting(0);
   
   ?>
   
 <form action="" method="POST">
 Username:
    <input type="username" name="username" value=""/><br><br>
 Password:
    <input type="password" name="password" value=""/><br><br>
  <input type="submit" name="submit" value="login"><br><br>
</form>

<?php
   if(isset($_POST['submit'])){
	   
	   $user =$_POST['username'];
	   $pwd =$_POST['password'];
	   $query ="SELECT * FROM STUDENT WHERE username='$user'&&password='$pwd'";
	   $data =mysqli_query($conn,$query);
	   $total=mysqli_num_rows($data);
	   echo $total;
   }
   ?>
		   
  