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
    <title>Nu.NL Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/register.css">
    <link rel="stylesheet" href="style/header.css">
</head>

<body>
    <?php include("includes/header.php") ?>
    <div class="width">
        <div class="column">
            <form action="" method="POST" class="column">
                <img src="images/Nu.svg" alt="Nu" class="nuImage">
                <h2>Maak je account aan</h2>
                <div id="cube">
                    <div>
                        <span id="thin">Je maakt een DVG account aan met:</span>
                    </div>
                    <div id="spacing">
                        <strong id="mail"><?php echo $_SESSION['email'] ?></strong>
                    </div>
                    <div>
                        <a class="a" href="identify.php">wijzig e-mailadres</a>
                    </div>
                </div>
                <div class="width">
                    <h3 class="size">Stel je wachtwoord in</h3>
                    <input type="password" name="password" placeholder="wachtwoord"> <br>
                    <i class="ten">Gebruik minimaal 10 karakters</i>
                </div>
                <div class="width">
                    <h3 class="size">Persoonlijke gegevens</h3>
                    <input type="text" name="voornaam" placeholder="Voornaam"> <br><br>
                    <input type="text" name="achternaam" placeholder="Achternaam">
                </div>
                <div class="width">
                    <label class="checkboxProduct">
                        <input class="checkbox" type="checkbox" name="emailproduct">
                        <span>Ja, ik wil via e-mail productinformatie van NU.nl ontvangen.</span>
                    </label> <br>
                    <br>
                    <label class="checkboxAanbiedingen">
                        <input class="checkbox" type="checkbox" name="emailAanbieding">
                        <span>Ja, ik wil via e-mail aanbiedingen van NU.nl ontvangen.</span>
                    </label> <br>
                    <br>
                    <label class="checkboxNieuws">
                        <input class="checkbox" type="checkbox" name="emailNieuws">
                        <span>Ja, ik ontvang graag elke ochtend het belangrijkste nieuws van NU.nl.</span>
                    </label>
                </div>
                <div class="width">
                    <p>
                        Indien je privacy instellingen dit toelaten, gebruiken we je
                        <a href="https://privacy.dpgmedia.nl/nl/document/privacy-policy#profiel">gegevens</a>
                        om je marketing en advertentie uitingen te tonen die relevant voor je zijn.
                        Je kunt je toestemming altijd wijzigen via je privacy instellingen in onze websites en apps.
                    </p>
                </div>
                <button type="submit" name="submitInputs">
                    <h3>Maak mijn account aan</h3>
                </button>
                <div class="width">
                    <p>
                        Door dit account aan te maken, ga ik akkoord met de
                        <a href="https://privacy.dpgmedia.nl/nl/document/terms-of-use">gebruiksvoorwaarden</a>
                        en verklaar ik 16 jaar of ouder te zijn.
                    </p>
                </div>
            </form>
        </div>
    </div>
    <?php include("includes/iFooter.php") ?>

    <?php
    //PHP Gedeelte voor inserten etc
    if (isset($_POST['submitInputs'])) {
        if ($_POST['password'] != "" && $_POST['voornaam'] != "" && $_POST['achternaam'] != "") {
            $hoofdletter = preg_match('@[A-Z]@', $_POST['password']);
            $kleineletter = preg_match('@[a-z]@', $_POST['password']);
            $nummer    = preg_match('@[0-9]@', $_POST['password']);
            $specialChars = preg_match('@[^\w]@', $_POST['password']);
            if ($hoofdletter && $kleineletter && $nummer && $specialChars && strlen($_POST['password']) >= 10) {
                $email = $_SESSION['email'];
                $wachtwoord = $_POST['password'];
                $voornaam = $_POST['voornaam'];
                $achternaam = $_POST['achternaam'];
                $hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
                // Standaard rank geven || Rank 0 is voor gebruikers
                $rank = 0;
                //PDO Start

                try {
                    $query = 'INSERT INTO users (voornaam, achternaam, email, passwords, rank) VALUES (:vname, :aname, :email, :pswrd, :rank)';
                    $values = [':vname' => $voornaam, ':aname' => $achternaam, ':email' => $email, ':pswrd' => $hash, ':rank' => $rank];
                    $execute = $pdo->prepare($query);
                    $execute->execute($values);
                } catch (PDOException $e) {
                    $output = "Er is een fout opgedoken probeer het later opnieuw";
                }
                /* $_SESSION['email'] = $email; */
                $_SESSION['email'] = 'fernandokook1023@gmail.com';
                header("Location: login.php");
                exit();
            }
        }
    }
    ?>

</body>