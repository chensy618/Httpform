<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Login form submission
    if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simulate setting a session cookie
        setcookie("session", "abc123", time() + 3600, "/");

        // Simulate redirect after login
        header("Location: dashboard.php");
        exit;
    }
    // Signup form submission
    elseif (isset($_POST['username'], $_POST['password'], $_POST['repeat_password'], $_POST['email'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];
        $email = $_POST['email'];

        // You could also set a cookie here if desired
        echo "Sign Up form submitted successfully!<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Login</title>
</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form method="POST" action="">
                    <div class="group">
                        <label for="username" class="label">Username</label>
                        <input id="username" type="text" class="input" name="username">
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </form>
            </div>
            <div class="sign-up-htm">
                <form method="POST" action="">
                    <div class="group">
                        <label for="username-signup" class="label">Username</label>
                        <input id="username-signup" type="text" class="input" name="username">
                    </div>
                    <div class="group">
                        <label for="password-signup" class="label">Password</label>
                        <input id="password-signup" type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <label for="repeat-password" class="label">Repeat Password</label>
                        <input id="repeat-password" type="password" class="input" data-type="password" name="repeat_password">
                    </div>
                    <div class="group">
                        <label for="email" class="label">Email Address</label>
                        <input id="email" type="text" class="input" name="email">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>