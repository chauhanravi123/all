<?php
		$con=mysqli_connect("localhost","root","","ravi");
		$sql = "select * from `field`";
		$result=mysqli_query($con,$sql);
		while($fieldinfo=mysqli_fetch_field($result))
		  {
		     $currentfield=mysqli_field_tell($result);
			 printf("result".$fieldinfo->result);
		  }
?>
			 