<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container mt-3">
    <center>
    <form action="" method="POST">
          <input type="number" name="enrollno" placeholder="enter your enrollment number" class="container mt-3 w-100" required>
          <input type="text" name="name" placeholder="enter your name" class="container mt-3 w-100" required>
          <input type="email" name="email" placeholder="enter your email" class="container mt-3 w-100" required>
          <input type="number" name="contect" placeholder="enter your contect" class="container mt-3  w-100" required>
          <label for="date" value="birthdate">BIRTHDATE:</label>
          <input type="date" name="dateofbirth" class="container mt-3 w-100" required>
          <select name="city" class="container w-100 mt-3">
            <option value="city">city</option>
            <option value="botad">botad</option>
            <option value="surat">surat</option>
            <option value="rajkot">rajkot</option>
          </select>
          
          <label for="address" value="address">ADDRESS:</label>
          <textarea name="address" rows="5" cols="50" class="container mt-3 w-100" required>
          </textarea>
          <label for="GENDER"  class="container mt-3 w-100" value="GENDER">GENDER:</label>
         
          <input type="radio" name="gender" value="male">MALE
          <input type="radio" name="gender" value="female">FEMALE
          <input type="submit" value="login" class="btn btn-primary w-100 mt-3">
          <input type="submit" value="clear" class="btn btn-danger w-100 mt-3">
    </form>
    </center>    
</div>
<?php	
   $con=mysqli_connect("localhost","root","","ravi");
   if(isset($_POST['enrollno']))
   {
	   $enrollno=$_POST['enrollno'];
	   $name=$_POST['name'];
       $email=$_POST['email'];
	   $mno=$_POST['contect'];
	   $dob=$_POST['dateofbirth'];
	   $city=$_POST['city'];
	   $address=$_POST['address'];
	   $gender=$_POST['gender'];
	     $sql="INSERT INTO  `login`( `enrollno`, `name`, `email`, `contect`, `dateofbirth`, `city`, `address`, `gender` ) (' $enrollno','$name','$email','$mno','$dob','$city','$address','$gender')";
       $result=mysqli_query($con,$sql);
	   if($result==1)
	   {
		 
	   }
	   else
	   {
		   echo "invalid";
	   }
    }
	?>