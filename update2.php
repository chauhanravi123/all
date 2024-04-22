<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
  $con=mysqli_connect("localhost","root","","ravi");
  if(isset($_POST['update']))
  {  
      $id = $_POST['id'];
	  $fnm=$_POST['txtfnm'];
	  $lnm=$_POST['txtlnm'];
	  $email=$_POST['email']; 
	  $mno=$_POST['txtmno'];
	  $addres=$_POST['addres'];
	  $country=$_POST['country'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $gender=$_POST['gender'];
	  $sql="UPDATE `student_detail` SET `firstname`='$fnm',`lastname`='$lnm',`email`='$email',`mobileno`='$mno',`addres`='$addres',`country`='$country',`state`='$state',`city`='$city',`gender`='$gender' WHERE `id`='$id'";
        $result=mysqli_query($con,$sql);
		if($result==1)
		{   
	      echo "record updated sucessfully";
		  header('Location:table.php');
		}
		else
		{
			 echo "Error:" . $sql . "<br>" . $con->error;
		}
		
   }
    if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$sql="select  * from student_detail where id='$id'";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$id=$row['id'];
				$fnm=$row['firstname'];
				$lnm=$row['lastname'];
				$email=$row['email'];
				$mno=$row['mobileno'];
				$addres=$row['addres'];
				$country=$row['country'];
				$state=$row['state'];
				$city=$row['city'];
				$gender=$row['gender'];
				$lnm=$row['lastname'];
			}
		}
	
	?>
	<center>
	<h2>UPDATE STUDENT INFORMATION </h2>
	</center>
	<div class="container">
	<form action="" method="post">
	
          <fieldset>
            <legend>Personal information:</legend>
            firstName:<br>
            <input type="text" name="txtfnm" class="container my-2 w-100" value="<?php echo $fnm; ?>">
			<br>		
			lastname<br>
			<input type="text" name="txtlnm" class="container my-2 w-100 " value="<?php echo $lnm; ?>">
             <br>
            <input type="hidden" name="id" class="container my-2 w-100" value="<?php echo $id; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" class="container my-2 w-100 " value="<?php echo $email; ?>"> 
			<br>
		   mobileno:<br>
            <input type="text" name="txtmno" class="container my-2 w-100" value="<?php echo $mno; ?>">
            <br>
           addres:<br>
		   <input type="text" name="addres" class="container my-2  w-100" value="<?php echo $addres;?>">
            <br>
			country:<br>
			<input type="text" name="country" class="container my-2 w-100" value="<?php echo $country ;?>">
			<br>
			state:<br>
			<input type="text" name="state" class="container my-2  w-100" value="<?php echo $state ;?>">
			<br>
			city:<br>
			<input type="text" name="city"  class="container my-2 w-100 " value="<?php echo $city ;?>">
			<br>
		    gender:<br>
			<input type="text" name="gender" class="container my-2 w-100" value="<?php echo $gender; ?>">
			<br>
            <input type="submit" value="Update" class="container my-2 w-100 btn btn-primary" name="update">
          </fieldset>
        </form>
		</div>
        </body>
        </html>
    <?php
	}
	else{
        header('Location: table.php');
    }

?>