<?php
  require './connection/connect.php';

  if (!isset($_GET['strumento'])) {
    die('Error, select an instrument please');
  }
  $scoreType = "score".substr($_GET['strumento'], 0, 1);
  $qry = mysqli_query($conn, "SELECT nome, $scoreType FROM user ORDER BY $scoreType DESC LIMIT 10;");
  echo json_encode(mysqli_fetch_all($qry));
 ?>
