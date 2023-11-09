<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $valor = $_POST['valor'];
  $query = "INSERT INTO task(title, description, valor) VALUES ('$title', '$description', $valor)";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
