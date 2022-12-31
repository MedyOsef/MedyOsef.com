<?php
require './databaseCall.php';
$answer = "";

$firstName = $_POST['firstName'];
$email = $_POST['email'];
$stmt = $conn->prepare("SELECT * FROM new_letter WHERE email=?");
$stmt->execute([$email]);
$email_exist = $stmt->fetch();
if (!$email_exist) {
  $addToNewletter = "INSERT INTO new_letter(firstName, email) VALUES('$firstName', '$email')";
  if (isset($firstName) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

    if ($conn->exec($addToNewletter)) {
      $answer = "$firstName, Tu es maintenant inscript à la newsletter";
    }
  }
} else {
  $answer = "$firstName, Dejà inscript à la newsletter";
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
  <link rel="stylesheet" href="CSS/reset.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      /* width: 100%; */
      height: 97vh;
      background-color: #1F1F2E;
      color: #fff;
    }

    p {
      font-size: 30px;
    }

    a {
      color: #3FBAFC;
      font-size: 25px;
    }

    a:hover {
      color: #4EBA86;
      transition: all .4s ease-in-out;
    }
  </style>
</head>

<body>
  <p><?php echo ucfirst($answer) ?></p>
  <p>Redirection dans 5secs</p>
  <p class="return"><a href="http://localhost">Retoure à l'accueil</a></p>
</body>
<script>
  setTimeout(myURL, 5000);

  function myURL() {
    document.location.href = 'http://localhost';
  }
</script>

</html>