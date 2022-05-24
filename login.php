<?php
  require './connection/connect.php';
  session_start();
  if(isset($_SESSION['user'])) {
    header('Location: main.php');
    exit();
  }
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $errUser = '';

    if (empty($email) || empty($psw)) {
      $errUser = 'Fill in all fields';
      goto end;
    }
    $select = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email';");
    $res = mysqli_fetch_array($select);
    if (mysqli_num_rows($select) == 1 and password_verify($psw, $res['password'])) {
      $_SESSION['user'] = $res['nome'];
      header("Location: main.php");
      exit();
    }
    $errUser = 'Wrong email or password!';
  }
  end:
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Bootstrap and jquery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- My css -->
    <link rel="stylesheet" href="css/forms.css">
  </head>
  <body>
    <div class="logo">
      <a class="colored" href="index.html">E minor</a><br>
    </div>
    <div id="container">
      <div class="error">
        <?php echo $errUser;?>
      </div>
      <h1 class="colored">Welcome back!</h1>
      <form action="login.php" method="post">
        <input type="email" placeholder="email" name="email"><br>
        <input type="password" placeholder="password" name="psw"><br>
        <button type="submit" class="bg-colored" name="login">login</button>
      </form>
      <p>Don't have an account? <a class="colored"href="register.php">Create your account!</a></p>
    </div>
  </body>
</html>
