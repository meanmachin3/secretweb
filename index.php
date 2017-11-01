
<!DOCTYPE html>
<html>
<head>
	<title>The Entrar-shadow Website form</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!--start-main-->
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
						error_reporting(E_ALL);

							include "./DB_Connect.class.php";
							$name = $_POST["username"];
							$pass = $_POST["password"];
							if (isset($_POST['submit'])){		
								
									if ($name=="user" && $pass == "pass") {
										session_start();
      									$_SESSION["logged_in"] = "YES";
      									header('Location: http://www.theworldsworstwebsiteever.com/');
    								}
							else {
								session_start();
      							$_SESSION["logged_in"] = "NO";
      							$db1 = new DB_Connect();
							    $conn = $db1->connect();

							    $query = "insert into attempts(username, password, server_ip, attempt_time) values('".$name."','".$pass."', '".$_SERVER['REMOTE_ADDR']."', '".date('l jS \of F Y h:i:s A')."')";
							    $result = pg_query($conn,$query);
							    						}
						}
						?>
					<!--<p><a href="#">Forgot Password ?</a></p>-->
				</form>
			</div>
      	</div>
			 <!--//end-main-->
		 		
</body>
</html>