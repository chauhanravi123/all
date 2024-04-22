<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
$con=mysqli_connect("localhost","root","","ravi");
    if (isset($_POST['update'])) {
         $id = $_POST['id'];
         $fnm=$_POST['txtfnm'];
		 $lnm=$_POST['txtlnm'];
		 $mno=$_POST['txtmno'];
		 $ema=$_POST['txtema'];
		 $pwd=$_POST['txtpwd'];
        $sql = "UPDATE `crud` SET `firstname`='$fnm',`lastname`='$lnm',`mobileno`='$mno',`email`='$ema',`password`='$pwd' WHERE `id`='$id'";
        $result = mysqli_query($con,$sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header('Location: button.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }

if (isset($_GET['id'])) {
    $id= $_GET['id'];
    $sql= "SELECT * FROM `crud` WHERE id='$id'";
    $result = mysqli_query($con,$sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
           
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
        <form action="update1.php" method="post">
          <fieldset>
            <legend>Personal information:</legend>
            firstName:<br>
            <input type="text" name="txtfnm"  class="container my-2 w-100" value="<?php echo $fnm; ?>">
			<br>
			
			lastname<br>
			<input type="text" name="txtlnm" class="container my-2 w-100" value="<?php echo $lnm; ?>">

            <input type="hidden" name="id" class="container my-2 w-100" value="<?php echo $id; ?>">
            <br>
            mobileno:<br>
            <input type="number" name="txtmno" class="container my-2 w-100" value="<?php echo $mno; ?>">
            <br>
            Email:<br>
            <input type="email" name="txtema" class="container my-2 w-100" value="<?php echo $ema; ?>"> 
			<br>
			password:<br>
            <input type="password" name="txtpwd" class="container my-2 w-100" value="<?php echo $pwd; ?>">
            <br><br>
            <input type="submit" value="update" class="container my-2 w-100 btn btn-primary" name="update">
          </fieldset>
        </form>
		</div>
        </body>
        </html>
    <?php
	}
	else{
        header('Location: button.php');
    }
}
?>