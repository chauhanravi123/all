<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-1 text-center">
<form action="index.php" method="post">
<img src="assets/image/rss.jpg" class="img-fliud" height="150" width="150">
   <input type="text" name="txtunm" placeholder="enter username" class="form-control mt-1" required>
   <input type="password" name="txtpwd" placeholder="enter pasword" class="form-control mt-1" required>
   
   <input type="submit" value="login"  class="btn btn-primary w-100">
   <a href="register.php"> new user? please click here</a>
</form> 
<?php
    $con=mysqli_connect("localhost","root","","snapchat");
		if(isset($_POST['txtunm']))
		{
			$unm=$_POST['txtunm'];
			$pwd=$_POST['txtpwd'];
			$sql="select * from 'login' where 'username'='$unm' and 'password'='$pwd'";
			
			$res=mysqli_query($con,$sql);
			$count=mysqli_num_rows($res);
			
			if($count==1)
			{
				header("location:home.php");
			}
			else
			{
				echo "invalid";
			}
		}		
   ?>
   