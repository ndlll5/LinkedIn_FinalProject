<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="assets/icons/LinkedIn_icon.svg.png" alt="LinkedIn Logo" class="linkedin-logo">
        </div>
        <form action="signup-check.php" method="post">
            <h2>Sign Up</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label for="email">Email</label>
            <?php if (isset($_GET['email'])) { ?>
                <input type="email" 
                       id="email" 
                       name="email" 
                       placeholder="Email"
                       value="<?php echo $_GET['email']; ?>">
            <?php } else { ?>
                <input type="email" 
                       id="email" 
                       name="email" 
                       placeholder="Email">
            <?php } ?>

            <label for="uname">User Name</label>
            <?php if (isset($_GET['uname'])) { ?>
                <input type="text" 
                       id="uname" 
                       name="uname" 
                       placeholder="User Name"
                       value="<?php echo $_GET['uname']; ?>">
            <?php } else { ?>
                <input type="text" 
                       id="uname" 
                       name="uname" 
                       placeholder="User Name">
            <?php } ?>

            <label for="password">Password</label>
            <input type="password" 
                   id="password" 
                   name="password" 
                   placeholder="Password">

            <label for="re_password">Re Password</label>
            <input type="password" 
                   id="re_password" 
                   name="re_password" 
                   placeholder="Re Password">

            <button type="submit">Sign Up</button>
            <p class="signup-prompt">Already have an account? <a href="index.php" class="ca">Sign in</a></p>
        </form>
    </div>
</body>
</html>
