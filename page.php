<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container">
<form action="page.php" method="POST">
  <label for="name">First name:</label><br>
    <input type="text" id="name" name="name" placeholder="enter your name" class="fluid-container my-2 mx-2 w-100"required><br>
  <label for="emial">emial:</label><br>
     <input type="text" id="emial" name="emial" placeholder="enter emial" class="fluid-container my-2 mx-2 w-100"required><br>
  <label for="mobile no">mobile no:</label><br>
    <input type="mobile no" id="mobile no" name="mobileno" placeholder="enter mobile no" class="fluid-container my-2 mx-2 w-100"required><br>
  <label for="password">password:</label><br>
    <input type="password" id="password" name="password" placeholder="enter  password" class="fluid-container my-2 mx-2 w-100"required><br>
    <input type="submit" value="login" class="btn-btn-primary w-100">
</form>
</div>
<?php

$con=mysqli_connect("localhost","root","","ravi");
 if(isset($_POST['name']))
 {
	 $nm=$_POST['name'];
	 $emi=$_POST['emial'];
	 $mno=$_POST['mobileno'];
	 $pwd=$_POST['password'];
	 $sql="INSERT INTO `user_login`( `name`, `emial`, `mobileno`, `password`) VALUES ('$nm','$emi','$mno','$pwd')";
	 $res=mysqli_query($con,$sql);
     if($res==1)
	 {
		 echo " coneceted successfully"; 
     }
     else
       {
		 echo "invalid";
	   }		
	
 }
 ?>