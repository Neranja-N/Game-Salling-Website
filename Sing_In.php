<?php 
	
	session_start();

	$conn = mysqli_connect('localhost' , 'root' , '');

	mysqli_select_db($conn, 'web_project');

	if(isset($_POST['submit']))
	{
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$s = "select * from user_details where firstname = '$firstname'";

		$result = mysqli_query($conn , $s);

		$num = mysqli_num_rows($result);

		// if ($num == 1) {
		// 	echo "User Name Alredy Taken";
		// 	echo '<script type="text/javascript">myFunction();</script>';
		// }else{
		// 	$reg = " insert into user_details (firstname , lastname , email , password) values ('$firstname' , '$lastname' , '$email' , '$password')";
		// 	mysqli_query($conn , $reg);
		// 	echo "Registation Successful";
		// }
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging</title>
    <link rel="stylesheet" href="CSS\Sing_in.css">
   	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	   	<script>
		function myFunction() {
		  var x = document.getElementById("snackbar");
		  x.className = "show";
		  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		  alert("hhh");
		}
	</script>
<?php
	if ($num == 1) {
			echo "User Name Alredy Taken";
			echo '<script type="text/javascript">myFunction();</script>';
	}else{
		$reg = " insert into user_details (firstname , lastname , email , password) values ('$firstname' , '$lastname' , '$email' , '$password')";
		mysqli_query($conn , $reg);
		echo "Registation Successful";
	}
?>
<div class="form">
	<form method="post">
	<h3> <a href="index.html"> Home </a> </h3>
	<h2> Sign In </h2>
	<div class="form-content">
		<div class="form-box">
			<label>First name</label>
			<input type="text" name="first_name" placeholder="first name">
		</div>s
		<div class="form-box">
			<label>Last name</label>
			<input type="text" name="last_name" placeholder="Last name">
		</div>

		<div class="form-box">
			<label>Email</label>
			<input type="email" name="email" placeholder="email">
		</div>
		<div class="form-box">
			<label>password</label>
			<input type="password" name="password" placeholder="••••••••">
		</div>
		<div class="form-box">
			<input type="submit" name="submit" value="Sign In" onclick="myFunction()">
		</div>
		<p class="form-forget">If you allrady have account? <a class ="click" href="Login.php">Click Here...</a></p>
	</div>
	</form>
</div>  

	
		<button onclick="myFunction()">Show Snackbar</button>

		<div id="snackbar">Some text some message..</div>

		
</body>
</html> 