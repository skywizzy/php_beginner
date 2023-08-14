<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body bgcolor="lightgreen">
    <marquee><?php if(isset($_GET['success'])){echo $_GET['success']; } ?></marquee>
    <mark style="color: red;"><?php if(isset($_GET['msg'])){echo $_GET['msg']; }?></mark><br>
    <h1>Welcome, Please Login Below</h1>
    <fieldset>
        <legend>User Login Form</legend>
        <form action="res/login_process_module.php" method="post" enctype="application/x-www-form-urlencoded">
            <div>
                <label for="username">Enter Your Username</label><br><br>
                <input type="text" id="username" placeholder="Username" size="100" name="username" required>
            </div>
            <div>
                <label for="password">Enter Your Password</label><br><br>
                <input type="password" id="password" placeholder="Password" size="100" name="password" required>
            </div><br><br>
            <div>
                <input type="checkbox" name="rem" id="rem"><label for="rem">Remember me</label>
            </div>
            <a href="#">Forgotten Password ?</a>
            <br><br>
            <div>
                <button name="loginBtn">Login</button>
            </div>
        </form>
    </fieldset>
</body>
</html>