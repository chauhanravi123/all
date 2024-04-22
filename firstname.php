<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><link href="bootstrap.css" rel="stylesheet" >
<meta name="viewport" content="width=device-width, initial-scale=1">
 
   <div class="container">    
	  <form action="firstname.php" method="POST">	 
	      <input type="text" name="txtfnm" placeholder="enter first name" class="container mt-3" required>
	      <input type="text" name="txtlnm" placeholder="enter last name" class="container mt-3" required>
	      <input type="text" name="txtema" placeholder="enter email" class="container mt-3" required>
	      <input type="text" name="txtmno" placeholder="enter mobileno" class="container mt-3" required>
	      <input type="text area" name="addres" placeholder="enter your addres"  class="container mt-3" required>
	 
      <label for="country">CHOOSE A COUNTRY:</label>		
		<select name="country" id="country" class="container my-3">
			  <option value="country">country</option>
			  <option value="india">india</option>
			  <option value="canada">canada</option>
			  <option value="pakistan">pakistan</option>
			 </select></br>
      <label for="state">CHOOSE A STATE:</label>		
		<select name="state" id="state"class="container my-3">
			    <option value="state">state</option>
			    <option value="gujrat">gujrat</option>
				<option value="rajsthan">rajsthan</option>
				<option value="punjab">punjab</option>
			 </select></br>
			  <label for="city">CHOOSE A CITY:</label>
			<select name="city" id="city"class="container my-3">
			  <option value="city">city</option>
			  <option value="botad">botad</option>
			  <option value="surat">surat</option>
			  <option value="rajkot">rajkot</option>
			</select></br>
      <label for="gender">CHOOSE A GENDER:</label>
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female">feMale
			<input type="radio" name="gender" value="another"> another
			<input type="submit" value="login" class="btn btn-primary mt-2 w-100">
			<input type="submit" value="clear" class="btn btn-danger mt-2 w-100">	
	  </form>	 
	</div>
	
 <?php	
   $con=mysqli_connect("localhost","root","","ravi");
   if(isset($_POST['txtfnm']))
   {
	   $fnm=$_POST['txtfnm'];
	   $lnm=$_POST['txtlnm'];
       $ema=$_POST['txtema'];
	   $mno=$_POST['txtmno'];
	   $addres=$_POST['addres'];
	   $country=$_POST['country'];
	   $state=$_POST['state'];
	   $city=$_POST['city'];
	   $gender=$_POST['gender'];
	     $sql="INSERT INTO `student_detail`( `firstname`, `lastname`, `email`, `mobileno`, `addres`, `country`, `state`, `city`, `gender`) values('$fnm','$lnm','$ema','$mno','$addres','$country','$state','$city','$gender')";
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