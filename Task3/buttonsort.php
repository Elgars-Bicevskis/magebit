
<?php

//on button clikc order by date or email
if (isset($_POST['buttonY'])) {
    $queryy = 'SELECT * FROM emails ORDER BY date' ;
  $result = $conn->query($queryy);
  }
  if (isset($_POST['buttonX'])) {
      $queryy = 'SELECT * FROM emails ORDER BY email' ;
    $result = $conn->query($queryy);
    }


 ?>
