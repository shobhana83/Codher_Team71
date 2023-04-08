<?php
	include("database.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
		$name = $_POST['name'];
		$name = stripslashes($name);
		$name = addslashes($name);

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$subject = $_POST['subject'];
		$subject = stripslashes($subject);
		$subject = addslashes($subject);

		$message = $_POST['message'];
		$message = stripslashes($message);
		$message = addslashes($message);
		$str="SELECT email from user WHERE email='$email'";
		$result=mysqli_query($con,$str);
		
            $str="insert into contact set name='$name',email='$email',subject='$subject',message='$message'";
			if((mysqli_query($con,$str)))	
			echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
			header("location:../task1.html");
    }
?>
