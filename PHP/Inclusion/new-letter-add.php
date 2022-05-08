<?php
    try {
      $conn = new PDO("mysql:host=localhost;dbname=medyosef", 'root', '');
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection error: " .$e->getMessage();
    }
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("SELECT * FROM news_letter WHERE email=?");
    $stmt->execute([$email]);
    $email_exist = $stmt->fetch();
    if (!$email_exist){
      $addToNewletter = "INSERT INTO news_letter(firstName, email) VALUES('$firstName', '$email')";
      if (isset($firstName) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        if ($conn->exec($addToNewletter)){
            echo "yes";
        }else{
          echo "no";
        }
      }
    }
    $conn = null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

</body>
</html>