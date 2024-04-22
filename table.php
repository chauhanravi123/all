
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<!--The above meta characteristics make a website 
		compatible with different devices. -->
		
	<title> STUDENT DETAILS</title>
</head>
<body >
  <div class="fluid-container my-3 ">
     <button class="btn btn-primary w-100 MY-3">
	 <a href="firstname.php" class="text-light"> Add user</a>
	 </button>
	 </div>
	 <center>
	 <h1 CLASS="CONTAINER MY-1">STUDENT INFORMATION</h1>
	 </center>
	 <table class="table my-5 " >
	    <thead >
		   <tr>
		    <th scope="col" >sr no</th>
		    <th scope="col" >FIRST NAME</th>
		    <th scope="col" >LAST NAME</th>
		    <th scope="col" >EMAIL</th>
		    <th scope="col" >MOBILE NO</th>
		    <th scope="col" >ADDRES</th>
		    <th scope="col" >COUNTRY</th>
		    <th scope="col" >STATE</th>
		    <th scope="col" >CITY</th>
		    <th scope="col" > GENDER</th> 
			<th scope="col" >OPERATION</th>
		  </tr>
		 </thead>
		 <tbody >
		     <?php
			
			 $con=mysqli_connect("localhost","root","","ravi");
					$sql="select *from `student_detail`";
					$result=mysqli_query($con,$sql);
					if($result)
						{
							while($row=mysqli_fetch_assoc($result))
								{
									$id=$row['id'];
									$fnm=$row['firstname'];
									$lnm=$row['lastname'];
									$ema=$row['email'];
									$mno=$row['mobileno'];
									$addres=$row['addres'];
									$country=$row['country'];
									$state=$row['state'];
									$city=$row['city'];
									$gender=$row['gender'];
							echo '<tr>
									<th scope="row">'.$id.'</th>
									<td>'.$fnm.'</td>
									<td>'.$lnm.'</td>
									<td>'.$ema.'</td>
									<td>'.$mno.'</td>
									<td>'.$addres.'</td>
									<td>'.$country.'</td>	
									<td>'.$state.'</td>	
									<td>'.$city.'</td>	
									<td>'.$gender.'</td>	
		
			  <td>
			   <button class="btn btn-primary">
			      <a href="update2.php?id='.$id.'" class="text-light">update</a>
			  </button>
			  </td>
			  <td>
			    <button class="btn btn-light">
			      <a href="delete1.php?id='.$id.'  class=" fa fa-trash text-light">
				  <i class="fa fa-trash" style="font-size:35px;color:red;"></i>
				  </a>	 
			  </button>
			</td>
				</tr>';
		                        }
		                   }
?>
			</tbody>
       </table>	
  </body>
</html>