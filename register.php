<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Register Below</h1>
    <fieldset>
        <legend>Fill the Form below to signup</legend>
        <form action="res/register_process_module.php" method="post" enctype="application/x-www-form-urlencoded">
            <div>
                <label for="fullname">Enter your fullname</label><br>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your Fullname">
            </div>
            <div>
                <label for="username">Enter your Username</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your Username">
            </div>
            <div>
                <label for="country">Select Country</label>
                <select name="country" id="country">
                    <option value="Nigeria">Nigeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ghana">Ghana</option>
                </select>
            </div>
            <div>
                <h4>Gender</h4>
                <input type="checkbox" value="Male" name="sex" id="male"><label for="male">Male</label>
                <input type="checkbox" value="female" name="sex" id="female"><label for="female">Female</label>
            </div>
            <div>
                <label for="email">Enter your Email</label><br>
                <input type="email" name="email" id="email" placeholder="Enter your Email">
            </div>
            <div>
                <label for="password">Choose a Strong Password</label><br>
                <input type="password" name="password" id="password" placeholder="Form a tight lock">
            </div>
            <button name="registerBtn">Submit Form</button>
        </form>
    </fieldset>
</body>
</html>