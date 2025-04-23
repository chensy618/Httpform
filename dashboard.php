<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <div class="login-form">
            <div class="sign-in-htm" style="transform: none;">
                <h2 style="color: white; text-align: center; margin-bottom: 30px;">Welcome to the Dashboard</h2>
                <div class="group">
                    <label class="label">User Activity</label>
                    <div style="background: rgba(255,255,255,.1); padding: 15px 20px; border-radius: 25px; color: white;">
                        • Login from DA DA DOO DOO<br>
                        • Viewed device logs<br>
                        • Triggered alert on sensor #2
                    </div>
                </div>
                <div class="group">
                    <label class="label">IoT Controls</label>
                    <div style="background: rgba(255,255,255,.1); padding: 15px 20px; border-radius: 25px; color: white;">
                        <form method="POST" action="">
                            <label for="device-toggle" style="display: block; margin-bottom: 10px;">Toggle Device A:</label>
                            <input type="submit" class="button" value="Turn ON">
                        </form>
                    </div>
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="index.php" style="color: #fff;">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
