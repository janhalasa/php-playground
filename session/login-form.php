<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1.0">
</head>
<body>
  <div class="page-container">
    <h1>Login</h1>
    <?php 
    if (array_key_exists('error', $_GET)) {
      echo '<div class="error-message">';
      if ($_GET['error'] === 'invalid-credentials') {
        echo 'Invalid username or password';
      }
      else if ($_GET['error'] === 'access-denied') {
        echo 'Access denied';
      }
      echo '</div>';
    }
    ?>
    <form action="login.php" method="POST">
      
      <ul>
        <li>Valid username/password is anything with 5 or more letters.</li>
      </ul>
      
      <div class="form-group">
        <div><label for="username">Username:</label></div>
        <div><input type="text" id="username" name="username"></div>
      </div>

      <div class="form-group">
        <div><label for="password">Password:</label></div>
        <div><input type="password" id="password" name="password"></div>
      </div>

      <div class="buttons">
        <button type="submit">Login</button>
      </div>
    </form>

    <div class="link-block">&raquo; <a href="private-page.php">Private page</a></div>
  </div>
</body>
</html>