<!DOCTYPE HTML>

<html>
	<head>
		<title>Online Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

			
				<section id="banner" data-video="images/banner.jpg">
					<div class="inner">
						<header>
                            
							<form action="after-signup.php" method="post">
                                <label><h2>NAME</h2><input type="text"  name="name" required></label>
                                <label><h2>Password</h2><input type="password" name="pass" required></label>
                                <label><h2>Email</h2><input type="email" name="email" required></label>
                                <label><h2>Confirm password</h2><input type="text" name="conpwd" required></label>
                                <!--<label><h2>Enter Your DOB</h2><br><input type="date" name="Enter Your DOB" required></label>-->
								<label><input type="submit" value="Login" name="Login"></label>

								<p>Already have an existing account <a href="login.php" style="color: crimson"><br>login</a></p>
                            </form>
                        </header>
                        <footer>
                            <div class="inner">
						<h2>Team Astra</h2>
						<p>Sujay Gad, Mayur R Baggan, Jnanesh D</p>
                            </div>
                        </footer>
                    </div>
                    
        </section>
    </body>
    <?php
extract($_POST);
if($pass!=$conpwd)
{
    alert("Password and Confirm password must be same");
    echo "<script>alert('user is invalid');
		location.href='fori.php';
		</script>";
}
?>
</html>