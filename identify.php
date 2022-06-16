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
</head>

<body>
<?php include("header.php") ?>
    <div class="column">
        <img src="images/Nu.svg" alt="Nu" class="nuImage">
        <h3>Login of maak je account aan</h3>
        <span>vul je e-mailadres in</span>
        <form action="" method="POST">
            <input type="text" id="email" name="email"> <br>
            <button type="submit" class="button" name="submitEmail">Ga Verder</button>
        </form>
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
</body>