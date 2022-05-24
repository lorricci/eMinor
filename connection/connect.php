<?php
  $DB_NAME = 'eminor';
  $DB_HOST = 'localhost';
  $DB_USER = 'root2';
  $DB_PASS = 'root';

  $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS) or die('Database connection failed');
  mysqli_select_db($conn, $DB_NAME) or die('Wrong db name');
  mysqli_set_charset($conn, 'utf8');
 ?>
