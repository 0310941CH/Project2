<?php 
session_start();
if ($_SESSION['username'] != "" && $_SESSION['password'] != "") {
    //code wat je wil doen als je wel bent ingelogd
} else {
    //code wat je wil doen als je niet bent ingelogd
    exit();
}
?>