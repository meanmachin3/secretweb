
<!DOCTYPE html>
<html>
<head>
	<title>The Entrar-shadow Website form | w3layouts</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form method = "post">
						<input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" name = "username" >
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name = "password">
						<div class="submit">
							<input type="submit" onclick="myFunction()" value="LOGIN" name = "submit">
					</div>	
          
						<?php


							if (isset($_POST['submit'])){		
								$name = $_POST["username"];
								$pass = $_POST["password"];
									if ($name=="user" && $pass == "password") {
										session_start();
      									$_SESSION["logged_in"] = "YES";
      									header('Location: 1.html');
    								}
							else {
								session_start();
      							$_SESSION["logged_in"] = "NO";
      							$f = fopen("failedlogins.txt", "a");
      							$entry = "Password: ". $pass . " - " . $_SERVER['REMOTE_ADDR'] . " - " . date('l jS \of F Y h:i:s A') . "\r\n";
      							fwrite($f, $entry);
      							fclose($f);
							}
						}
						?>
					<!--<p><a href="#">Forgot Password ?</a></p>-->
				</form>
			</div>
      	</div>
			 <!-----//end-main---->
		 		
</body>
</html>