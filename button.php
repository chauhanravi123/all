<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<!--The above meta characteristics make a website 
		compatible with different devices. -->
		
	<title>crud operation</title>
</head>
<body>
  <div class="container">
     <button class="btn btn-primary w-100">
	 <a href="connect.php" class="text-light"> Add user</a>
	 </button>
	 </div>
	 <table class="table my-5 " >
	    <thead >
		   <tr>
		    <th scope="col" >sr no</th>
		    <th scope="col" >FIRST NAME</th>
		    <th scope="col" >LAST NAME</th>
		    <th scope="col" >MOBILE NO</th>
		    <th scope="col" >EMAIL</th>
		    <th scope="col" >PASSWORD</th>
		    <th scope="col" > OPERATION</th>
		  </tr>
		 </thead>
		 <tbody >
		     <?php
			
			 $con=mysqli_connect("localhost","root","","ravi");
					$sql="select *from `crud`";
					$result=mysqli_query($con,$sql);
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
							echo '<tr>
									<th scope="row">'.$id.'</th>
									<td>'.$fnm.'</td>
									<td>'.$lnm.'</td>
									<td>'.$mno.'</td>
									<td>'.$ema.'</td>
									<td>'.$pwd.'</td>	
			<td>
			  <button class="btn btn-primary">
			      <a href="update1.php?id='.$id.'" class="text-light">update</a>
			  </button>
			  </td>
			  <td>
			   <button class="btn btn-danger">
			      <a href="delete.php?id='.$id.'" class="text-light">delete</a>
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