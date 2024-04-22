<div class="container mt-1">
	<form action="" method="POST">
		<input type="text" name="txtunm" class="form-control mt-1" placeholder="enter username" required>
		<input type="password" name="txtpwd" class="form-control mt-1" placeholder="enter password" required>
		<input type="text" name="txtnm" class="form-control mt-1" placeholder="enter mobile no." required>
		<input type="submit" value="register" class="btn btn-primary w-100">
		<a href="login.php">already a user?</a>
	</form>
</div>
<?php
		$con=mysqli_connect("localhost","root","","abhishek");
		if(isset($_POST['txtunm']))
		{
			$unm=$_POST['txtunm'];
			$pwd=$_POST['txtpwd'];
			$mob=$_POST['txtnm'];
			$sql="INSERT INTO `shodsp`( `username`, `password`, `mobileno`) VALUES ('[$unm]','[$pwd]','[$mob]')";
			$res=mysqli_query($con,$sql);
			if($res==1)
			{
				
			}
			else
			{
				echo "invalid";
			}
		}
?>