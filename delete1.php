<?php
 $con=mysqli_connect("localhost","root","","ravi");
 if(isset($_GET['id']))
   {
	   $con=mysqli_connect("localhost","root","","ravi");
     $id=$_GET['id'];
	 $sql="delete from `student_detail` where `id`='$id'";
	 $result=mysqli_query($con,$sql);
	 if($result)
	   {
	     header('location:table.php');
		}
		else
		 {
		  die(mysqli_error($con));
		 }
	}
?>