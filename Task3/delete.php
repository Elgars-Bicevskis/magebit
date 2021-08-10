
<?php

if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    mysqli_query($conn, "DELETE FROM emails WHERE id=$id");
    header('Location: subscriptions.php');
  }

         ?>
