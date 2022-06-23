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
    <link rel="icon" href="images/Nu-nl-logo.png">
    <title>Inloggen | nu.nl</title>
    <link rel="stylesheet" href="style/identify.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/iFooter.css">
    <script src="js/identify_script.js"></script>
</head>

<body>
<?php include("includes/header.php") ?>
    <div class="column">
        <img src="images/Nu.svg" alt="Nu" class="nuImage">
        <h1>Log in of maak je account aan</h1>
        <span>Vul je e-mailadres in</span>
        <form class="emailInput" action="" method="POST">
            <input type="text" id="email" class="email" name="email" placeholder="E-mailadress"> <br>
            <button type="submit" class="button" name="submitEmail"><h3>Ga Verder</h3></button>
        </form>
        <summary class="summary">
        <button onclick="dropdownDPG()" class="dropdown_button"><span class="dpgmedia">Over DPG Media account</span> <img src="images/arrow-left.svg" alt="pijltje" id="pijltje"></button>
        </summary>

        <div id="dropdown_DPG">
            <div class="dropdown_DPG_content">
                <h1>Over DPG Media account</h1>
                <p>Met een DPG Media account kun je inloggen op de websites en in de apps van deze merken van DPG Media:</p>
                <ul>
                    <li>NU.nl, het AD, de Volkskrant, Trouw, Het Parool, de Stentor, Tubantia, de Gelderlander, het ED, Brabants Dagblad, BN DeStem en de PZC</li>
                    <li>Libelle, Veronica Superguide, Story, Nouveau, Kek Mama, AutoWeek, Ouders van Nu, vtwonen college, Stijlvol Wonen</li>
                    <li>Tijdschrift.nl, Reclamefolder.nl</li>
                    <li>Qmusic, Joe</li>
                </ul>
                <p>Wanneer je inlogt, krijg je toegang tot bepaalde extra's of mogelijkheden. Deze verschillen per merk.</p>
                <p>Heb je een abonnement op een van de nieuwsmerken? Dan krijg je onbeperkt toegang tot alle artikelen en video's van dat nieuwsmerk.</p>
            </div>
        </div>
        
        <div class="help_login">
            <h2>Hulp bij inloggen</h2>
            <a href="https://login.dpgmedia.nl/password/reset?client_id=nu-site-web">Ik ben mijn wachtwoord vergeten</a> <br>
            <a href="">Ik weet niet of ik al een account heb</a> <br>
            <a href="">Ik logde eerder in via Facebook of Google</a> <br>
        </div>
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

    <?php include("includes/iFooter.php") ?>
</body>