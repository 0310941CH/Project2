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
    <title>Nu.NL login</title>
    <link rel="stylesheet" href="identify.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
<?php include("header.php") ?>
    <div class="column">
        <img src="images/Nu.svg" alt="Nu" class="nuImage">
        <h1>Login of maak je account aan</h1>
        <span>vul je e-mailadres in</span>
        <form class="emailInput" action="" method="POST">
            <input type="text" id="email" class="email" name="email"> <br>
            <button type="submit" class="button" name="submitEmail"><h3>Ga Verder</h3></button>
        </form>
        <summary class="summary">
        <span class="dpgmedia">Over DPG Media account</span> <img src="images/arrow-left.svg" alt="pijltje" class="pijltje">
        </summary>
        
        <h2>Hulp bij inloggen</h2>

        <a href="https://login.dpgmedia.nl/password/reset?client_id=nu-site-web">Ik ben mijn wachtwoord vergeten</a> <br>
        <a href="">Ik weet niet of ik al een account heb</a> <br>
        <a href="">Ik logde eerder in via Facebook of Google</a> <br>
    </div>
    <?php
    //PHP Gedeelte
    if (isset($_POST['submitEmail'])) {
        if ($_POST['email'] != "") {
            $emailAdress = $_POST['email'];

            $execute = $pdo->prepare('SELECT * FROM users WHERE email=:email');

            $data = [
                ":email" => $emailAdress,
            ];
            $execute->execute($data);
            $email = $execute->fetch(PDO::FETCH_ASSOC);

            if ($email === false) {
                $_SESSION['email'] = $emailAdress;
                header("Location: register.php");
            } elseif ($email == true) {
                $_SESSION['email'] = $emailAdress;
                header("Location: login.php");
            }
        }
    }
    ?>

    <?php include("footer.php") ?>
</body>