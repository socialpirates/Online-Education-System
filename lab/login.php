<?php
if (isset($_POST['ok'])) 
	{ 
		include('db_conn.php');
		$email_id=$_POST['email_id'];
		$pwd=$_POST['pwd'];
		
		$sql="SELECT * FROM signup where email='$email_id' and password='$pwd' ";
		
			$run = mysqli_query($con,$sql);

			 if($run == true){
		   	?>

		   	<script>
		   		window.alert("success full");
		   	</script>

			<?php
			header('location:attendence.php');
		   }else{
			?>
				<script>
		   		window.alert("Error");
		   		header('location:signup.php');
		   	</script>
<?php
		   }

	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
                    <li><a class="active" href="">About</a></li>
                    <li><a href="signup.php">signup</a></li>
                    

                </ul>
            </nav>
            <div class="page-banner">
                <h2>Login User</h2>
            </div>
            <section class="container">
                <form method="post" action="login.php">
                    <table cellpadding="10">
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email_id" class="input-text">
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="pwd" class="input-text">
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="ok" value="Login" class="btn">   
                        </tr>
                    </table>
                </form>
            </section>
            <footer class="footer">

            </footer>
        </div>
    </body>
</html>
 