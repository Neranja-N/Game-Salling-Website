
<?php 
	session_start();

	// header('location:Gallery.html');

	$conn = mysqli_connect('localhost' , 'root' , '');
	mysqli_select_db($conn, 'web_project');

	if (isset($_POST['submit'])) {

		$username = $_POST['user_name'];
		$email = $_POST['email'];
		$message = $_POST['msg'];

		if ($username == '' || empty($message)) {
			echo "<script> alert ('please enter username') </script>";
			exit();
		}

		$reg = "INSERT INTO contact_us (user_name , email , message) VALUES ('$username' , '$email' , '$message')";
		mysqli_query($conn , $reg);
		
			if (isset($_POST['submit'])) {
				header('location:Gallery.html');
				echo "<script> alert ('Message send Successfull!') </script>";
			}
	}
	else{
		echo "<script> alert ('Message not send some thing went WRONG!') </script>";
	}
 ?>