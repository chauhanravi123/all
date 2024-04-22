<?php
		$con=mysqli_connect("localhost","root","","ravi");
		$sql="select * from `field`";
		$res=mysqli_query($con,$sql);
		while($obj=mysqli_fetch_object($res))
		  {
		    printf("%s",$obj->result);
		  }
?>