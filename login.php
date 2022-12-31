<?php require 'PHP/actions/loginAction.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<?php require "PHP/Inclusion/head.php"; ?>

<body>
    <form action="" method="POST">
        <div class="head">
            <h1>Connection</h1>
            <hr>
        </div>

        <div class="inputs">
            <h2 class="alert"><?php if (isset($errorMsg)) {echo $errorMsg;} ?></h2>
            <input type="text" name="username" placeholder="username ou email" required>
            <input type="password" name="password" placeholder="password" required>
        </div>

        <div align="center">
            <button type="submit" name="validate">Se connecter</button>
        </div>
    <br>
        <div align="center">
            <p>Vous n'avez deja un compte <br><a href="signup.php">Inscrivez-vous</a></p>
        </div>

    </form>
</body>

</html>