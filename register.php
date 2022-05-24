<?php
  require_once('connection/connect.php');
  session_start();
  if(isset($_SESSION['user'])) {
    header('Location: main.php');
    exit();
  }
  if (isset($_POST['submit'])) {
    $nome = $_POST['user'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $pswc = $_POST['pswc'];
    $accetto = !$_POST['accetto'] ? 'false' : 'true';
    $keycontrol = NULL;
    $errUser = array();
    $flag = true;

    //controllo se sono stati inseriti i campi obbligatori
    if (!$nome || !$email || !$psw || !$pswc) {
      array_push($errUser, "Complete each field!");
      $flag = false;
      goto end;
    }
    if ($pswc !== $psw) {
      $flag = false;
      array_push($errUser, "Passwords don't match");
    }
    if ($accetto === 'false') {
      $flag = false;
      array_push($errUser, "Accept the Terms of use");
    }
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'")) != 0) { // unicità email
      array_push($errUser, "Email already taken");
      $flag = false;
      $email = '';
    }
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE nome = '$nome'")) != 0) { // unicità username
      array_push($errUser, "Username already taken");
      $flag = false;
      $nome = '';
    }
    if ($flag) {
      $psw = password_hash($psw, PASSWORD_DEFAULT);
      $insert = "INSERT INTO user (nome, email, password,  accetto, keycontrol) VALUES ('$nome', '$email', '$psw', $accetto, '$keycontrol')";
      $res = mysqli_query($conn, $insert);
      if ($res) {
        header("Location: registration-confirmed.html");
      }
    }
  }
  end:
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
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
      <?php foreach ($errUser as $value): ?>
        <div class="err">
          <p><?= $value?></p>
        </div>
      <?php endforeach; ?>
      <h1 class="colored">Sign in now!</h1>
      <form action="register.php" method="post">
        <input type="text" name="user" placeholder="username" value="<?=$nome?>">
        <input type="email" name="email" placeholder="email" value="<?=$email?>">
        <input type="password" name="psw" placeholder="password" value="<?=$psw?>">
        <input type="password" placeholder="password check" name="pswc">
        <label >
          <input type="checkbox" name="accetto" value="true"/> I accept the <a class="colored" href="#">Terms of use</a>
        </label>
        <button type="submit" class="bg-colored" name="submit">start free trial</button>
      </form>
    </div>
  </body>
</html>
