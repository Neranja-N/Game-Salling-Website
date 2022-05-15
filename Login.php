
<?php 

session_start(); 

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'web_project';

$connection = mysqli_connect($host,$user,$password,$db_name);

if(mysqli_connect_errno()){
	die("Connection Feild :- ".mysqli_connect_error());
}
else{
	$setvar = "";
	if(isset($_POST['submit']))
	{
		$username = mysqli_real_escape_string($connection,$_POST['user_name']);
		$password = mysqli_real_escape_string($connection,$_POST['password']);

		$search_query = " SELECT * FROM user_details WHERE firstname = '{$username}' AND password = '{$password}' LIMIT 1";

			$result_set = mysqli_query($connection,$search_query);

			if($result_set){

				if(mysqli_num_rows($result_set) == 1){
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['username'] = $user['firstname'];
					header('Location:Store.php');
					// echo "login successfully";
				}
				else{
					session_unset();	
				  	// header('Location:Login.php');
					echo '<script>alert("Somthing Went Wrong.."); </script>';
				}
			}
			else{
			}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging</title>
    <link rel="stylesheet" href="CSS\Login.css">
   
</head>
<body>
<div class="form">
	<form method="post">
	 <p class="home"><a class="login" href="index.html"> Home </a> </p> 
	<h2> Login </h2>
	<div class="form-content">
		<div class="form-box">
			<label>Username</label>
			<input type="text" name="user_name" placeholder="user name">
		</div>
		<div class="form-box">
			<label>Password</label>
			<input type="password" name="password" placeholder="••••••••">
		</div>
		<div class="form-box">
			<input type="submit" name="submit" value="Login">
		</div>
		<?php
			if(!empty($setvar)){
				echo '<script>alert("message");</script>';
			}
		?>
	</div>
	<p class="form-forget">If you do not have account? <a  class ="click" href="Sing_In.php">Click Here...</a></p>
	</form>
</div>    
</body>
</html>