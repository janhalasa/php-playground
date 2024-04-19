<?php require_once('user-check.php'); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1.0">
</head>
<body>
  <div class="page-container">
    <h1>Private content</h1>
    <h2>Hello</h2>

    <ul>
      <li>Your username is: <span class="user-attribute"><?php echo $_SESSION['username'] ?></span>
      <li>Your role is: <span class="user-attribute"><?php echo $_SESSION['role'] ?></span>
    </ul>
    
    <form action="logout.php">
      <div class="buttons">
        <button type="submit">Logout</button>
      </div>
    </form>
    <div class="link-block">&raquo; <a href="login-form.php">Login form</a></div>
  </div>
</body>
</html>