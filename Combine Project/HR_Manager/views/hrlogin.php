<?php include_once "../php/hrlogin_validation.php" ;

    //session_start();
    if(isset($_SESSION["username"])){
		header("Location: hr_dashboard.php");
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
	  <title>Login</title>
	  <link rel="stylesheet" href="css/hrlogin_style.css">
   </head>
   <body>
      <div class="center">
	     <h1>Login</h1>
		 <form method="post">
		    <div class="txt_field">
			   <input type="text" value="<?php echo $username?>" name="username" required>
			   <span></span>
			   <label>Username</label>
			</div>
			<div class="txt_field">
			   <input type="password" value="<?php echo $pass?>" name="pass" required>
			   <span></span>
			   <label>Password</label>
			</div>
			<div class="pass">Forgot Password?</div>
			<input type="submit" name="login" value="Login">
		 </form>
	  </div>
   </body>
</html>