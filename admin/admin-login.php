<?php
require '../PHP/actions/databaseCall.php';
if (isset($_SESSION['admin_auth'])) {
    header('Location: admin-panel.php');
}
$errorMsg = '';
/*adminpassword=59469*/

if (isset($_POST['submit'])) {
    //Verification des champs
    if (!empty($_POST['user']) AND !empty($_POST['password'])) {
           //Les donnees de l'utilisateur
            $username = htmlspecialchars($_POST['user']);
            $password = htmlspecialchars($_POST['password']);

            // Verifier si l'utilisateur existe
            $checkIfUserIsAdmin = $conn->prepare('SELECT * FROM administrators WHERE user = ?');
            $checkIfUserIsAdmin->execute(array($username));

            if($checkIfUserIsAdmin->rowCount() > 0) {

                // Recupere les données de l'administrateur
                $userInformations = $checkIfUserIsAdmin->fetch();
                
                //verifier si le mot de passe est correct
                if(password_verify($password,$userInformations['pwd'])){

                    // Authentication de l'utilisateur et recuperation des donnees dans des variables globales de session
                    $_SESSION['admin_auth'] = true;
                    $_SESSION['id'] = $userInformations['id'];
                    $_SESSION['user'] = $userInformations['user'];
                  

                    // rediriger l'utilisateur vers la page le panel d'administration
                    header('Location: admin-panel.php');


                }else{
                    $errorMsg = "Identifiants incorrect ...\n".$errorMsg;
                }

            }else{
                $errorMsg = "Identifiants incorrect ...\n".$errorMsg;
            }

        }else{
            $errorMsg = "Veuillez completer tous les champs ...\n".$errorMsg;
        }
}
?>
<!DOCTYPE html>
<html lang="fr">
<?php require "../PHP/Inclusion/head.php"; ?>

<body>
    <form method="post" action="">
        <div class="head">
            <h1>Portail Admin</h1>
            <hr>
        </div>
        <div class="inputs">
            <h2 class="alert"><?php echo $errorMsg; ?></h2>
            <input type="text" name="user" placeholder="Username" autocomplete="off" required>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div align="center">
            <button type="submit" name="submit">Se connecter</button>
        </div>
    </form>
</body>

</html>