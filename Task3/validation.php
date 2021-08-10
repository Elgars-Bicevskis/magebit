
<?php
$errors = "";
$coPattern = "^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[coCO]{2}$^";


if(isset($_POST['subbtn'])) {

  $inputEmail = $_POST['emails'];

//condition for email validation
    if(empty($inputEmail)){
      $errors = "Email address is required";

    }elseif(preg_match($coPattern, $inputEmail)){
      $errors = "We are not accepting subscriptions from Colombia emails";

    }elseif(!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)){
      $errors = "Please provide a valid email address";

    }elseif (empty($_POST['checkbox'])) {
      $errors = "You must accept the terms and conditions";

    }else {
          $sql = "INSERT INTO emails (email) VALUES ('".$_POST['emails']."')";

          if ($conn->query($sql) === TRUE) {
              header("Location: http://localhost/magebit/Task2/congrats.html");
              return;

          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
      $conn->close();
}

 ?>
