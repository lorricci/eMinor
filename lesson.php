<?php
  require 'connection/connect.php';

  session_start();
  if (!isset($_SESSION['user'])) {
    header("Location: homepage.html");
    exit();
  }
  $strumento = $_GET['strumento'];
  $user = $_SESSION['user'];
  $type = substr($strumento, 0, 1);
  mysqli_query($conn, "UPDATE user SET score$type = score$type + 1 WHERE nome = '$user'");
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lesson</title>
    <!-- Bootstrap and jquery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha384-Dmia8eQq5QAVU5VL95mpXzGE2n2oYxIv9aFwn+JAtQ3Y/4bWeHSjKUgYSJi/BovQ" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- My css -->
    <link rel="stylesheet" href="css/lesson.css">
    <!-- My script -->
    <script src="js/changeColored.js" charset="utf-8"></script>
    <script>
      $(document).ready(() => {
        $(".colored").changeColor('<?=$strumento?>');
        $(".bg-colored").changeBgColor('<?=$strumento?>');
      });
    </script>
  </head>
  <body>
    <div class="logo">
      <a class="colored" href="index.html">E minor</a><br>
    </div>

    <div id="lesson">
      <h1 class="colored"><?=$_GET['titolo']?></h1>
      <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?=$_GET['video']?>" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
        <a id="back" class="bg-colored" href="main.php">Back</a>
    </div>
  </body>
</html>
