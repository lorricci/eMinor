<?php
  require "./connection/connect.php";
  if (!isset($_GET['strumento'])) {
    die("Set an instrument");
  }
  $strumento = $_GET['strumento'];
  $qry = "SELECT descriptionT, descriptionC, lessons FROM corsi WHERE strumento = '$strumento';";
  $res = mysqli_fetch_array(mysqli_query($conn, $qry), MYSQLI_ASSOC);
  $res["lessons"] = json_decode($res["lessons"]);
  $res["descriptionC"] = json_decode($res["descriptionC"]);
  echo json_encode($res);
 ?>
