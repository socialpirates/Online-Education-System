<?php
if (isset($_POST['ok'])) 
	{ 
		include('db_conn.php');
			$email_id=$_POST['email_id'];
			$username=$_POST['username'];
			$pwd=$_POST['pwd'];
			$cpwd=$_POST['cpwd'];
			
			
			
			$sql="INSERT INTO `signup` (`id`, `email`, `username`, `password`, `confirmpassword`) VALUES (NULL, '$email_id', '$username', '$pwd', 'cpwd');";
		
			$run = mysqli_query($con,$sql);
			
			
		   if($run == true){
		   	?>
		   	<script>
		   		window.alert("success full add");
		   	</script>
<?php
			header('location: login.php');
		   }else{
?>
				<script>
		   		window.alert("Error");
		   		header('location:signup.php');
		   	</script>
<?php
		   }

	?>

<?php
	}		
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Signup</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="wrapper">
            <header class="header">
                <h1>Cloud Attendence</h1>
            </header>
            <nav class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a class="active" href="about.html">About</a></li>
                    <li><a href="login.php">Login</a></li>
                    
                    

                </ul>
            </nav>
            <div class="page-banner">
                <h2>Sign Up</h2>
            </div>
            <section class="container">
                <form method="post" action="signup.php">
                    <table cellpadding="10">
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email_id" class="input-text">
                        </tr>
                        <tr>
                        <td>User Name</td>
                        <td><input type="text" name="username" class="input-text">
                    </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="pwd" class="input-text">
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td><input type="password" name="cpwd" class="input-text">
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><a href=""><input type="submit" name="ok" value="Signup" class="btn">   
                        </tr>
                    </table>
                </form>
            </section>
            <footer class="footer">

            </footer>
        </div>
    </body>
</html>