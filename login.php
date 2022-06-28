<?php
session_start();
include_once("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nu.NL Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/iFooter.css">
</head>

<body>
    <?php include("includes/header.php") ?>
    <div class="column">
        <img src="images/Nu.svg" alt="Nu" class="nuImage">
        <h2>Inloggen op nu.nl</h2>
        <span>Vul je wachtwoord in voor:</span>
        <span><?php echo $_SESSION['email'] ?></span>
        <a href="">Wijzig e-mailadres</a>

        <form action="" method="POST">
            <input type="password" name="password"> <br>
            <a href="">Wachtwoord vergeten</a><br>
            <button type="submit" name="submitLogin">Log in</button>
        </form>
    </div>

    <?php
    // PHP Gedeelte

    if (isset($_POST['submitLogin'])) {
        if ($_POST['password'] != "") {
            $email = htmlspecialchars($_SESSION['email']); // Zet het meegegeven email adres om naar html characters.
            $wachtwoord = htmlspecialchars($_POST['password']); // Zet het meegegeven wachtwoord om naar html characters.
            //PDO
            $login = "SELECT * FROM users WHERE email=:email";
            $prepare = $pdo->prepare($login);

            $data = [
                ":email" => $email,
            ];

            $prepare->execute($data);
            $user = $prepare->fetch(PDO::FETCH_ASSOC);

            if (isset($user["rank"]) && $user["rank"] == 1) {
                $_SESSION['admin'] = 1;
            }

            if (isset($user["rank"])) {
                $_SESSION['user'] = 1;
            }

            $wachtwoordCheck = password_verify($_POST["password"], $user["passwords"]);

            if ($wachtwoordCheck == true) {
                header("Location: index.php");
                exit();
            } else {
                $output = "Wachtwoord is niet correct";
            }
        }
    }
    ?>

<?php include("includes/iFooter.php") ?>
</body>