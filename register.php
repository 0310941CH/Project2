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
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>
<?php include("header.php") ?>
    <div class="column">
        <img src="images/Nu.svg" alt="Nu" class="nuImage">
        <h1>Maak je account aan</h1>
        <span>Je maakt een DVG account aan met:</span>
        <h3><?php echo $_SESSION['email'] ?></h3>
        <a>Wijzig e-mailadres</a>
        <h3>Stel je wachtwoord in</h3>
        <form action="" method="POST" class="column">
            <input type="password" name="password" placeholder="wachtwoord"> <br>
            <a>gebruik minimaal 10 karakters</a>
            <h3>Persoonlijke gegevens</h3>
            <input type="text" name="voornaam" placeholder="Voornaam"> <br>
            <input type="text" name="achternaam" placeholder="Achternaam">


            <label class="checkboxProduct">
                <input type="checkbox" name="emailproduct">
                <span>Ja, ik wil via e-mail productinformatie van NU.nl ontvangen.</span>
            </label> <br>

            <label class="checkboxAanbiedingen">
                <input type="checkbox" name="emailAanbieding">
                <span>Ja, ik wil via e-mail aanbiedingen van NU.nl ontvangen.</span>
            </label> <br>

            <label class="checkboxNieuws">
                <input type="checkbox" name="emailNieuws">
                <span>Ja, ik ontvang graag elke ochtend het belangrijkste nieuws van NU.nl.</span>
            </label>

            <p>
                Indien je privacy instellingen dit toelaten, gebruiken we je
                <a href="https://privacy.dpgmedia.nl/nl/document/privacy-policy#profiel">gegevens</a>
                om je marketing en advertentie uitingen te tonen die relevant voor je zijn.
                Je kunt je toestemming altijd wijzigen via je privacy instellingen in onze websites en apps.
            </p>

            <button type="submit" name="submitInputs">
                <h3>Maak mijn account</h3>
            </button>

            <p>
                Door dit account aan te maken, ga ik akkoord met de
                <a href="https://privacy.dpgmedia.nl/nl/document/terms-of-use">gebruiksvoorwaarden</a>
                en verklaar ik 16 jaar of ouder te zijn.
            </p>
        </form>
    </div>
    <?php include("footer.php") ?>

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
                $_SESSION['email'] = $email;
                header("Location: login.php");
                exit();
            }
        }
    }
    ?>

</body>