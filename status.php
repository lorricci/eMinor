<?php
  require './connection/connect.php';
  session_start();
  if (!isset($_SESSION['user'])) {
    die("User not logged");
  }
  $obj = new stdClass();
  $user = $_SESSION['user'];
  if (isset($_GET['strumento'])) {
    $scoreType = "score".substr($_GET['strumento'], 0, 1);
    $rank = "SELECT COUNT($scoreType) FROM user u1 WHERE (SELECT $scoreType From user u2 WHERE ((u1.$scoreType >= u2.$scoreType) and u2.nome = '$user'));";
    $score = "SELECT $scoreType FROM user WHERE nome = '$user';";
    $rank = mysqli_fetch_array(mysqli_query($conn, $rank))[0];
    $score = mysqli_fetch_array(mysqli_query($conn, $score))[0];
    $obj->rank = $rank;
    $obj->score = $score;
    $obj->level = intdiv($score, 10) + 1;
  } else {
    $score = "SELECT scoreP, scoreB, scoreG, scoreD FROM user WHERE nome = '$user';";
    $score = mysqli_fetch_array(mysqli_query($conn, $score));
    foreach (array("Piano", "Bass", "Guitar", "Drum") as $strumento) {
      $obj2 = new stdClass();
      $scoreType = "score".substr($strumento, 0, 1);
      $rank = "SELECT COUNT($scoreType) FROM user u1 WHERE (SELECT $scoreType From user u2 WHERE ((u1.$scoreType >= u2.$scoreType) and u2.nome = '$user'));";
      $obj2->rank = mysqli_fetch_array(mysqli_query($conn, $rank))[0];
      $obj2->score = $score[$scoreType];
      $obj2->level = intdiv($score[$scoreType], 10) + 1;
      $obj->$strumento = $obj2;
    }
  }
  echo json_encode($obj);
?>
