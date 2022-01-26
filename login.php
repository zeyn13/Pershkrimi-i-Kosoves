<?php
session_start();
if(isset($_SEESION['username'])){
	header("location:All-for-Kosovo.php");
}else{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
 

    <br>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Sign Up Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slider" id="login" checked>
                <input type="radio" name="slider" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Sign Up</label>
                <div class="slide-tab"></div>
            </div>
            <div class="form-inner">
                <form action="login.php" method="POST">
                    <div class="field">
                        <input type="text" name="username"  placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field">
                        <input type="submit" value="Log In" name="loginButton">
                    </div>
                    <div class="signup-link">Not a member? <a href="#">Sign Up Now</a></div>
                </form>

                <form action="#" class="Sign Up">
                    <div class="field">
                        <input type="text" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" required>
                    </div>
                    <div class="field">
                        <input type="Submit" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    const loginForm = document.querySelector("form.login");
    const signupForm = document.querySelector("form.signup");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector(".signup-link a");
    const loginText = document.querySelector(".title-text .login");
    const signupText = document.querySelector(".title-text .signup");
    signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
    });
</script>


<?php
$username='';
$password='';

if(isset($_POST['loginButton'])){
if(empty($_POST['username']) || empty($_POST['password'])){
	echo "All fields are required!";
}else{
	$username=$_POST['username'];
	$password=$_POST['password'];

	if($username == 'Zeynep' && $password == 'Lika'){
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;

		header('location:All-for-Kosovo.php');
}else{

	echo 'This User Does Not Exist!';

}
}
}
?>