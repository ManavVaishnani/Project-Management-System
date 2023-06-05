<?php
	require 'databaseconnect.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    
<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="Login.php" method="POST">
	<h1>Create Account</h1>
	<!-- <div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div> -->
	<span>use your email for registration</span>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="number" name="groupno" placeholder="Group No">
	<input type="radio" name="stutype" id="leader">
	<label for="leader">Leader</label>
	<input type="radio" name="stutype" id="member">
	<label for="member">Member</label>
	<button name="Sign_up" type="submit" >Sign Up</button>
</form>
</div>

<div class="form-container sign-in-container">
	<form action="Login.php" method="POST">
		<h1>Sign In</h1>
		<!-- <div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>-->
	<span>use your account</span> 
	<input type="text" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<a href="#">Forgot Your Password</a>

	<button name="Sign_in" type="submit">Sign In</button>
	</form>
</div>
<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){        
		if(isset($_POST['Sign_in']))
			{
				$user = $_POST['email'];
				$pass = $_POST['password'];
				$_SESSION['email'] = $user;
				$sql = "SELECT * FROM `student` WHERE `User_name`='$user' AND `User_pass`='$pass'";
				$res = mysqli_query($conn,$sql);
				$row = mysqli_num_rows($res); 
            	if($row!=0)
            	{
                    header("location:dashboored.php");
					session_commit();
                    exit;
                }
                else{
                    $showmessage = "No users found..!! please sign up to our website..!!";
                echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p>'.$showmessage.'</p>
                <hr></div>';
                }
        }
		
		else if(isset($_POST['Sign_up'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$g_id = $_POST['groupno'];
			$_SESSION['email'] = $name;
			$sql = "INSERT INTO `student`(`User_name`,`User_email`,`User_pass`,`Group_id`) VALUES('$name','$email','$pass','$g_id')";
			$rel = mysqli_query($conn,$sql);

			header("location:dashboored.php");
		}
    }
?>

<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>
</body>
</html>