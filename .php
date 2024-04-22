<?php
$con=mysqli_connect("localhost","root","","password");
if(isset($_POST['update']))
  {
	$id=$_POST['id'];
	$fnm=$_POST['txtfnm'];
	$lnm=$_POST['txtlnm'];
	$mno=$_POST['txtmno'];
	$ema=$_POST['txtema'];
	$pwd=$_POST['txtpwd'];
	$sql=" UPDATE `crud` SET `firstname='$fnm', `lastname`='$lnm', `mobileno`='$mno', `email`='$ema', `password`='$pwd' where `id`='$id'";
	 $result=mysqli_query($con,$sql);
	 if($result==TRUE)
	 {
		 echo "record updated successfully";
		 header('Location:button.php');
	 }
	 else
	 {
		 echo "error:".$sql."<br>".$conn->error;
	 }
  }
  if(isset($_GET['id']))
	  $id=$_GET['id'];
      $sql="select  * from crud where id='$id'";
	  $result=mysqli_connect($sql,$con);
	  if($result)
	  {
		  while($row=mysqli_fetch_assoc($result))
		  {
			  $id=$row['id'];
			  $fnm=$row['firstname'];
			  $lnm=$row['lastname'];
			  $mno=$row['mobileno'];
			  $ema=$row['email'];
			  $pwd=$row['password'];
			  
		  
	  }
	    
?>
	   <center>
        <h2>Student details Update Form</h2>
		 </center>
		<div class="container my-3">
        <form action="" method="post">
          <fieldset>
            <legend>Personal information:</legend>
			firstName:<br>
            <input type="text" name="txtfnm"  class="container my-2 w-100" value="<?php echo $fnm; ?>">
			<br>
			lastname:<br>
			<input type="text" name="txtlnm" class="container my-2 w-100" value="<?php echo $lnm ;?>">
			<br>
			mobileno:<br>
			<input type="number" name="txtmno" class="container my-2 w-100" value="<?php echo $mno;?>">
			<br>
			email:<br>
			<input type="email" name="txtema" class="container my-2 w-100" value="<?php echo $ema;?>">
			<br>
			password:<br>
			<input type="password" name="txtpwd" class="container my-2 w-100" value="<?php echo $pwd;?>">
			<br><br>
            <input type="submit" value="Update" class="container my-2 w-100 btn btn-primary" name="update">
			</fieldset>
		  </form>
		 </div>
	</body>
  </html>
  <?php
  }
     else{
		 header('Location:button.php');
	 }
	 ?>
	  
