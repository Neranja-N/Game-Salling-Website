<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Game Gallery</title>
	<link rel="stylesheet" href="CSS\Gallery.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="images\background.webp">

	<div class="header">
	  <a href="index.php" class="logo"><font class="tittle" color="red"> &emsp;&emsp;NERA </font><font class="tittle" color="white"> GAMING HUB </font></a>
		  <div class="header-right">
		    <a href="index.php">Home</a>
		    <a class="active" href="Gallery.php">Gallery</a>
		    <a href="Store.php">Store</a>
		    <a href="#section4">Contact</a>
		  </div>
	</div>

	<div class="pageHeder">
		<h2 class="pagehedtext"> STORE <div class="redline"></div> </h2>
	</div>

	<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
  	<a href="images/34.webp" download><img src="images/34.webp" style="width:100%"></a>
  	<a href="images/9.jpg" download><img src="images/9.jpg" alt="imgs" style="width:100%"></a>
    <img src="images/5.jpg" style="width:100%">
    <img src="images/32.jpg" style="width:100%">
    <img src="images/29.jpg" style="width:100%">
    <img src="images/28.jpg" style="width:100%">
    <img src="images/10.jpg" style="width:100%">
    <img src="images/3.jpg" style="width:100%">
    <img src="images/18.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/17.jpg" style="width:100%">
    <img src="images/30.jpg" style="width:100%">
    <img src="images/15.jpg" style="width:100%">
    <img src="images/8.jpg" style="width:100%">
    <img src="images/3.jpg" style="width:100%">
    <img src="images/2.jpg" style="width:100%">
    <img src="images/23.jpg" style="width:100%">
    <img src="images/26.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="images/14.jpg" style="width:100%">
    <img src="images/post-9-fw.jpg" style="width:100%">
    <img src="images/27.jpg" style="width:100%">
    <img src="images/22.jpg" style="width:100%">
    <img src="images/24.jpg" style="width:100%">
    <img src="images/7.png" style="width:100%">
    <img src="images/20.jpg" style="width:100%">
    <img src="images/77.jpg" style="width:100%">
    <img src="images/33.jpg" style="width:100%">
  </div>
</div>

	<div class="main" id="section4">
	<div class="footer">
		<div class="form">
			<table>
				<form action="contactus.php" method="post">
				<tr>
				<td width="50%">
					<h2> Contact Us : </h2>
					<div class="form-content">
					<div class="form-box">
						<label>Username</label>
						<input type="text" name="user_name" placeholder="Enter user name">
						<label>Email</label>
						<input type="Email" name="email" placeholder="Enter user Email">
						<label>Message</label>
						<textarea rows=“5” cols="30" name="msg" placeholder="Text your message"></textarea>
						<!-- <input type="textarea" name="" placeholder="Type Your Message"> -->
					</div>
					<div class="form-box">
						<!-- <script>
							function myFunction() {
						    alert("Your Message sended. Thank You!");
						}
						</script> -->
						<!-- <input type="submit" name="Send" value="Send" onclick="myFunction()"> -->
						<input type="submit" name="submit" value="Send">
					</div>
				</td>
				</form>
				<td>
					</div>    
					<div class="socilIcons">
						<a href="https://www.facebook.com/neranjan.madusanka.5/" class="fa fa-facebook"></a>
						<a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"></a>
						<a href="https://mail.google.com/mail/u/0/#inbox" class="fa fa-google"></a>
						<a href="https://www.linkedin.com/in/neranjan-madusanka-5260671a0" class="fa fa-linkedin"></a>
						<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
						<a href="https://www.instagram.com/____p_o_d_i____/" class="fa fa-instagram"></a>
					</div>
					<div class="mydetails">
						<font> <b>Designer - </b> Neranjan Madusanka </font>
						<br><br>
						<font> <b>Email - </b> Neranjanmadusanka2000@gmail.com </font>
						<br><br>
						<font> <b>Contat no - </b>  0711635647 </font>
					</div>
				</td>
				</tr>
			</table>
		</div>
		</div>
	</div>
</body>
</html>