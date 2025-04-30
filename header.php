<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
</head>
<body>
    <header>
        <h1>Welcome to My Site</h1>
        <?php if (isset($_SESSION['user'])): ?>
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>! <a href="logout.php">Logout</a></p>
        <?php else: ?>
            <p><a href="login.php">Login</a> | <a href="signup.php">Sign Up</a></p>
        <?php endif; ?>
    </header>
    <hr>
    <?php if (!isset($_SESSION['user'])): ?>
        <form action="signup_process.php" method="post">
            <h2>Sign Up</h2>
            <label for="signup_name">Name:</label>
            <input type="text" id="signup_name" name="name" required>
            <?php if (isset($_SESSION['logged_in_message'])): ?>
                <p><?php echo htmlspecialchars($_SESSION['logged_in_message']); ?></p>
                <?php unset($_SESSION['logged_in_message']); ?>
            <?php elseif (isset($_SESSION['logged_out_message'])): ?>
                <p><?php echo htmlspecialchars($_SESSION['logged_out_message']); ?></p>
                <?php unset($_SESSION['logged_out_message']); ?>
            <?php endif; ?>
            <label for="signup_email">Email:</label>
            <input type="email" id="signup_email" name="email" required>
            <label for="signup_password">Password:</label>
            <input type="password" id="signup_password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
        <form action="login_process.php" method="post">
            <h2>Login</h2>
            <label for="login_email">Email:</label>
            <input type="email" id="login_email" name="email" required>
            <label for="login_password">Password:</label>
            <input type="password" id="login_password" name="password" required>
            <button type="submit">Login</button>
        </form>
    <?php endif; ?>
</body>
</html>