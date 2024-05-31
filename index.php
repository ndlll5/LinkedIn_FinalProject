<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="assets\icons\LinkedIn_icon.svg.png" alt="LinkedIn Logo" class="linkedin-logo">
        </div>
        <form action="login.php" method="post">
            <h2>Sign in</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="uname">User Name</label>
            <input type="text" id="uname" name="uname" placeholder="User Name">
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">
            
            <button type="submit">Sign in</button>
            <p class="signup-prompt">New to LinkedIn? <a href="signup.php" class="ca">Join now</a></p>
        </form>
    </div>
</body>
</html>
