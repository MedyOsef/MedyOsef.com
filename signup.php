<?php require "PHP/actions/signupAction.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<?php require "PHP/Inclusion/head.php"; ?>



<body>
    <form action="" method="POST">
        <div class="head">
            <h1>Inscription</h1>
            <hr>
        </div>

        <div class="inputs">
            <h2 class="alert"><?php if (isset($errorMsg)) {
                                    echo $errorMsg;
                                } ?></h2>
            <input type="text" name="username" placeholder="username" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="password" name="rpassword" placeholder="password again" required>
        </div>

        <div align="center">
            <button type="submit" name="validate">S'inscrire</button>
        </div>

        <div align="center">
            <p>Vous avez deja un compte <a href="login.php">connectez-vous</a></p>
        </div>

    </form>
</body>

</html>