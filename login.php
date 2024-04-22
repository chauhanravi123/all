<div class="container mt-1">
	<form action="" method="POST">
		<input type="text" name="txtunm" id="txtunm"  class="form-control mt-1" 			placeholder="enter username" required>
		<input type="password" name="txtpwd" class="form-control mt-1" placeholder="enter password" required>	
		<input type="submit" value="login" class="btn btn-primary w-100">
		<a href="register.php">new user?click here</a>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous">
	$("#txtunm").keyup(function()
	{
		unm=$("#txtunm").val();
		$ajax({
			type:'POST';
			url:'register.php';
			data:{username:unm};
			success:function(response){
				if(response=="D")
				{
					$("#txtunm").css("background-color","red");
				}
				else
				{
					
					$("#txtunm").css("background-color","green");
				}
			}
		});
	});
</script>