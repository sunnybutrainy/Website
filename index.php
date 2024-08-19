<?php
    include("includes/config.php");
    include("classes/Account.php");
    include("classes/Constants.php");
    $account = new Account($con);
    include("handlers/register-handler.php");
    include("handlers/login-handler.php");

    function getInputValue($name){
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
    }
?>

<html>
    <head>
        <title>Welcome to UFV</title>
        <link rel="stylesheet" type="text/css" href="register.css">
        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
<?php

if(isset($_POST['registerButton'])) {
    echo '<script>
            $(document).ready(function() {
                $("#loginForm").hide();
                $("#registerForm").show();
            });
        </script>';
}
else {
    echo '<script>
            $(document).ready(function() {
                $("#loginForm").show();
                $("#registerForm").hide();
            });
        </script>';
}

?>

<div id="background">
<div id="loginText">
    <h1>University of Fraser Valley</h1>
    <h2>Fifty Years Forward</h2>
    <ul>
        <li>You can find information about UFV</li>
        <li>♡</li>
    </ul>
</div>
<div id="inputContainer">
    <div>
    <form id="loginForm" action="index.php" method="POST">
        <h2>Login to your account</h2>
        <p>
            <?php echo $account->getError(Constants::$loginFailed); ?>
            <label for="loginUsername">Username</label>
            <input id="loginUsername" name="loginUsername" type="text" value="<?php getInputValue('loginUsername') ?>" required autocomplete="off">
        </p>
        <p>
            <label for="loginPassword">Password</label>
            <input id="loginPassword" name="loginPassword" type="password" required>
        </p>
    <div class="buttonimg">
        <button type="submit" name="loginButton">LOG IN</button>
        <div class="hasAccountText">
            <span id="hideLogin">Current and Future Students, Please sign up HERE</span>
        </div>
    </div>
</div>
    </form>



    <form id="registerForm" action="index.php" method="POST">
        <h2>Create Student Account</h2>
        <p>
            <?php echo $account->getError(Constants::$usernameCharacters); ?>
            <?php echo $account->getError(Constants::$usernameTaken); ?>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" value="<?php getInputValue('username') ?>" required>
        </p>

        <p>
            <?php echo $account->getError(Constants::$firstNameCharacters); ?>
            <label for="firstName">First name</label>
            <input id="firstName" name="firstName" type="text" value="<?php getInputValue('firstName') ?>" required>
        </p>

        <p>
            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
            <label for="lastName">Last name</label>
            <input id="lastName" name="lastName" type="text" value="<?php getInputValue('lastName') ?>" required>
        </p>

        <p>
            <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
            <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
            <?php echo $account->getError(Constants::$passwordCharacters); ?>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
        </p>
        <p>
            <label for="password2">Confirm password</label>
			<input id="password2" name="password2" type="password" placeholder="Your password" required>
		</p>

        <button type="submit" name="registerButton">SIGN UP</button>

        <div class="hasAccountText">
            <span id="hideRegister">Account holders, Log in here.</span>
        </div>


        
    </form>


</div>
</div>

</body>
</html>