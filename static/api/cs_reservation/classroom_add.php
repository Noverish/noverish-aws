<?php
  $classroom = $_POST["classroom"];

  include_once('conn.php');
  include_once('json.php');

  $sql="INSERT INTO Classroom (Classroom) VALUES ('$classroom')";

  $result = mysqli_query($conn, $sql);
  if(!$result) {
    print_sql_error($conn, $sql);
    die();
  }

  print_sql_success();

  mysqli_close($conn);
?>
