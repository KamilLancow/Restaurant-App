<?php
  $id = $_GET['id'];
  
  include('config.php');
  $sql = "SELECT Image FROM dishes WHERE id_dish = $id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $conn->close();

  header("Content-type: image/jpeg");
  echo $row['Image'];
?>