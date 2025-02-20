<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container"> 
        <h4>Login</h4>
        <form action="class/signup.php" method="post" onsubmit="return validateForm()" id="form">
            <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <span id="username_error"></span>
            </div>

            <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <span id="password_error"></span>
            </div>
            <div>

            <>
            <input type="checkbox">Remember me &nbsp;&nbsp;
            <a href="http://">Forget password?</a>
            </div>

            <button type="submit"  name="button">Login</button> 
            </div>
            
           
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>