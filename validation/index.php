<?php
    require('user_validator.php');

    if(isset($_POST['submit'])){
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();
        if(count($errors) == 0){
            $successMsg = "All entries were VALID!";
            $_POST = array();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    <div class="new-user">
        <h2>Create New User</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div style="color: green; text-align: center;">
                <?php echo $successMsg ?? ''; ?>
            </div>
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ""); ?>">
            <div class="error">
                <?php echo $errors['username'] ?? ''; ?>
            </div>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ""); ?>">
            <div class="error">
                <?php echo $errors['email'] ?? ''; ?>
            </div>

            <label>Password:</label>
            <input type="password" name="password" value="<?php echo htmlspecialchars($_POST['password'] ?? ""); ?>">
            <div class="error">
                <?php echo $errors['password'] ?? ''; ?>
            </div>

            <label>Confirm Password:</label>
            <input type="password" name="confirmpassword" value="<?php echo htmlspecialchars($_POST['confirmpassword'] ?? ""); ?>">
            <div class="error">
                <?php echo $errors['confirmpassword'] ?? ''; ?>
            </div>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>