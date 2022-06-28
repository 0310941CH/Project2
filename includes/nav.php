<?php
session_start();
require 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link type="text/css" href="/static/bundles/css/app.fbd914c7.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" href="./images/Nu-nl-logo.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="./js/script.js"></script>
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="content">
            <a href="index.php"><img id="logo" src="images/Nu-nl-logo.png" alt="NU-nl_logo"></a>
            <ul class="main-menu">
                <a href="">Net binnen</a>
                <a href="" style="color: #1f2544;">Algemeen</a>
                <a href="" style="color: #006cde;">Economie</a>
                <a href="" style="color: #e00613;">Sport</a>
                <a href="" style="color: #5100AF">Tech</a>
                <a href="" style="color: #ed893c;">Media en Cultuur</a>
                <a href="" style="color: #b60f80;">Achterklap</a>
                <a href="" style="color: #1f2544;">Shop</a>
                <button id="dropdown" onclick="dropdownSlide()">
                    <li id="btn-slider">Meer</li><img id="img-meer" src="images/down.png" alt="down">
                </button>
            </ul>
            <div class="toolbar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="2em" aria-labelledby="Wissel kleurenschema" role="presentation" data-v-1dd6691c="">
                    <title lang="nl" data-v-1dd6691c="">Wissel kleurenschema</title>
                    <g data-v-1dd6691c="">
                        <g fill="none" fill-rule="evenodd" data-v-1dd6691c="">
                            <path d="M0 0h24v24H0z"></path>
                            <rect width="1" height="3" x="12" fill="currentColor" rx=".5"></rect>
                            <rect width="1" height="3" x="12" y="21" fill="currentColor" rx=".5"></rect>
                            <rect width="1" height="3" x="22" y="10.5" fill="currentColor" rx=".5" transform="rotate(90 22.5 12)"></rect>
                            <rect width="1" height="3" x="1" y="10.5" fill="currentColor" rx=".5" transform="rotate(90 1.5 12)"></rect>
                            <rect width="1" height="3" x="19" y="3" fill="currentColor" rx=".5" transform="rotate(-135 19.5 4.5)"></rect>
                            <rect width="1" height="3" x="19" y="18" fill="currentColor" rx=".5" transform="rotate(135 19.5 19.5)"></rect>
                            <rect width="1" height="3" x="4" y="3" fill="currentColor" rx=".5" transform="scale(1 -1) rotate(45 15.37 0)"></rect>
                            <rect width="1" height="3" x="4" y="18" fill="currentColor" rx=".5" transform="scale(1 -1) rotate(-45 -42.57 0)"></rect>
                            <circle cx="12" cy="12" r="6.5" stroke="currentColor"></circle>
                            <path fill="currentColor" stroke="currentColor" d="M12.5 18.48V5.52a6.5 6.5 0 010 12.96z"></path>
                        </g>
                    </g>
                </svg>
                <svg data-v-1dd6691c="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="32" width="32" aria-labelledby="" role="presentation">
                    <title data-v-1dd6691c="" lang="nl"></title>
                    <g data-v-1dd6691c=""><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-v-1dd6691c="">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.041 18.223c-.304-.144-.512-.24-.54-.253a.536.536 0 0 0-.72.294.583.583 0 0 0 .28.753l.133.061c.25-.315.535-.601.847-.855Zm-2.024 3.84H9.5c-.182 0-.355-.203-.39-.325-.06-.206.06-.655.632-1.057.786-.55 2.981-1.564 3.182-1.657a.583.583 0 0 0 .297-.76.54.54 0 0 0-.722-.294c-.118.054-2.468 1.135-3.366 1.763-.883.617-1.303 1.535-1.07 2.337.178.612.705.993 1.375.993h8.59a5.541 5.541 0 0 1-.01-1ZM20.375 12.924c0 2.513-1.968 4.57-4.375 4.57-2.405 0-4.374-2.057-4.374-4.57v-2.285c0-2.512 1.969-4.569 4.374-4.569 2.407 0 4.375 2.057 4.375 4.569v2.285ZM16 7.212c-1.809 0-3.28 1.538-3.28 3.427v2.285c0 1.89 1.471 3.427 3.28 3.427 1.81 0 3.282-1.537 3.282-3.427v-2.285c0-1.889-1.473-3.427-3.282-3.427Z" fill="currentColor"></path>
                            <circle cx="23.5" cy="22.5" r="4.5" fill="#E88327"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.354 20.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708l3-3a.5.5 0 0 1 .708 0Z" fill="#fff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.646 20.646a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0Z" fill="#fff"></path>
                    </g>
                </svg>
                <?php
                if (isset($_SESSION["user"])) {
                    echo "<a href='./includes/logout.php'>Loguit</a>";
                } else {
                    echo "<a href='identify.php'>Login</a>";
                }

                if (isset($_SESSION["admin"])) {
                    echo "<a href='./admin/artikelOverzicht.php'>Admin</a>";
                }
                ?>
            </div>
        </div>
    </nav>
    <div class="content2">
        <div class="boven">
            <div class="logolinks">
                <img class="nulogo" src="images/Nu-nl-logo.png" alt=""> <br> <a href="">NU.nl</a>
            </div>
            <div class="toolbar2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="2em" aria-labelledby="Wissel kleurenschema" role="presentation" data-v-1dd6691c="">
                    <title lang="nl" data-v-1dd6691c="">Wissel kleurenschema</title>
                    <g data-v-1dd6691c="">
                        <g fill="none" fill-rule="evenodd" data-v-1dd6691c="">
                            <path d="M0 0h24v24H0z"></path>
                            <rect width="1" height="3" x="12" fill="currentColor" rx=".5"></rect>
                            <rect width="1" height="3" x="12" y="21" fill="currentColor" rx=".5"></rect>
                            <rect width="1" height="3" x="22" y="10.5" fill="currentColor" rx=".5" transform="rotate(90 22.5 12)"></rect>
                            <rect width="1" height="3" x="1" y="10.5" fill="currentColor" rx=".5" transform="rotate(90 1.5 12)"></rect>
                            <rect width="1" height="3" x="19" y="3" fill="currentColor" rx=".5" transform="rotate(-135 19.5 4.5)"></rect>
                            <rect width="1" height="3" x="19" y="18" fill="currentColor" rx=".5" transform="rotate(135 19.5 19.5)"></rect>
                            <rect width="1" height="3" x="4" y="3" fill="currentColor" rx=".5" transform="scale(1 -1) rotate(45 15.37 0)"></rect>
                            <rect width="1" height="3" x="4" y="18" fill="currentColor" rx=".5" transform="scale(1 -1) rotate(-45 -42.57 0)"></rect>
                            <circle cx="12" cy="12" r="6.5" stroke="currentColor"></circle>
                            <path fill="currentColor" stroke="currentColor" d="M12.5 18.48V5.52a6.5 6.5 0 010 12.96z"></path>
                        </g>
                    </g>
                </svg>
                <svg data-v-1dd6691c="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="32" width="32" aria-labelledby="" role="presentation">
                    <title data-v-1dd6691c="" lang="nl"></title>
                    <g data-v-1dd6691c=""><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-v-1dd6691c="">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.041 18.223c-.304-.144-.512-.24-.54-.253a.536.536 0 0 0-.72.294.583.583 0 0 0 .28.753l.133.061c.25-.315.535-.601.847-.855Zm-2.024 3.84H9.5c-.182 0-.355-.203-.39-.325-.06-.206.06-.655.632-1.057.786-.55 2.981-1.564 3.182-1.657a.583.583 0 0 0 .297-.76.54.54 0 0 0-.722-.294c-.118.054-2.468 1.135-3.366 1.763-.883.617-1.303 1.535-1.07 2.337.178.612.705.993 1.375.993h8.59a5.541 5.541 0 0 1-.01-1ZM20.375 12.924c0 2.513-1.968 4.57-4.375 4.57-2.405 0-4.374-2.057-4.374-4.57v-2.285c0-2.512 1.969-4.569 4.374-4.569 2.407 0 4.375 2.057 4.375 4.569v2.285ZM16 7.212c-1.809 0-3.28 1.538-3.28 3.427v2.285c0 1.89 1.471 3.427 3.28 3.427 1.81 0 3.282-1.537 3.282-3.427v-2.285c0-1.889-1.473-3.427-3.282-3.427Z" fill="currentColor"></path>
                            <circle cx="23.5" cy="22.5" r="4.5" fill="#E88327"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.354 20.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708l3-3a.5.5 0 0 1 .708 0Z" fill="#fff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.646 20.646a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0Z" fill="#fff"></path>
                    </g>
                </svg>
                <?php
                if (isset($_SESSION["user"])) {
                    echo "<a href='./includes/logout.php'>Loguit</a>";
                } else {
                    echo "<a href='identify.php'>Login</a>";
                }

                if (isset($_SESSION["admin"])) {
                    echo "<a href='./admin/artikelOverzicht.php'>Admin</a>";
                }
                ?>
            </div>
        </div>
        <div class="onder">
            <div class="onder_content">
                <a href="">Voorpagina</a>
                <a href="">Net binnen</a>
                <a href="">Populair</a>
                <button id="dropdown" onclick="dropdownSlideOnder()">
                    <li id="btn-slider-onder">Meer</li><img id="img-meer-onder" src="images/down.png" alt="down">
                </button>
            </div>
        </div>
    </div>
    <div id="dropdown-content">
        <div class="container-dropdown-content">
            <!--Voorpagina-->
            <ul class="blokken-dropdown">
                <li class="nav_header"><a href="index.php" style="color: #1f2544;">Voorpagina</a>
                <li class="nav_subitem"><a href="https://www.nu.nl/net-binnen">Net binnen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/Meest-Gelezen">Meest gelezen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/spanningen-oekraine">Oorlog in Oekraïne</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/binnenland">Binnenland</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/buitenland">Buitenland</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/algemeen">Algemeen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/politiek">Politiek</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/video">Video</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/podcast">Podcast</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/weer">Weer</a></li>
                </li>
            </ul>
            <!--Economie-->
            <ul class="blokken-dropdown">
                <li class="nav_header"><a href="https://www.nu.nl/economie" style="color: #006cde;">Economie</a>
                <li class="nav_subitem"><a href="https://www.nu.nl/klimaat">Klimaat</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/wonen">Wonen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/geld">Geld</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/werk">Werk</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/ondernemen">Ondernemen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/brexit">Brexit</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/auto">Auto</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/aandelen">Aandelen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/verkeer">Verkeer</a></li>
                </li>
            </ul>
            <!--Sport-->
            <ul class="blokken-dropdown">
                <li class="nav_header"><a href="https://www.nu.nl/sport" style="color: #e00613;">Sport</a>
                <li class="nav_subitem"><a href="https://www.nu.nl/voetbal">Voetbal</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/formule-1">Formule 1</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/scorebord">Scorebord</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/spellen">Spellen</a></li>
            </ul>
            </li>
            <!--Tech-->
            <ul class="blokken-dropdown">
                <li class="nav_header"><a href="https://www.nu.nl/tech" style="color: #5100AF">Tech</a>
                <li class="nav_subitem"><a href="https://www.nu.nl/games">Games</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/reviews">Reviews</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/achtergrond">Achtergrond</a></li>
                </li>
            </ul>
            </ul>
            <!--Mediaencultuur-->
            <ul class="blokken-dropdown">
                <li class="nav_header"><a href="https://www.nu.nl/entertainment" style="color: #ed893c;">Media en Cultuur</a>
                <li class="nav_subitem"><a href="https://www.nu.nl/film">Films en series</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/muziek">Muziek</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/cultuur-overig">Boek en cultuur</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/media">Media</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/achterklap">Achterklap</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/koninghuis">Koningshuis</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/tvgids">TV gids</a></li>
                </li>
            </ul>
            <!--Overig-->
            <ul class="blokken-dropdown">
                <li class="nav_header"><a href="https://www.nu.nl/overig" style="color: #2a9198;">Overig</a>
                <li class="nav_subitem"><a href="https://www.nu.nl/kind-gezin">Kind & Gezin</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/dieren">Dieren</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/eten-en-drinken">Eten en drinken</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/gezondheid">Gezondheid</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/nucheckt">NUcheckt</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/opmerkelijk">Opmerkelijk</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/uit">Thuis</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/vakantie">Vakantie</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/wetenschap">Wetenschap</a></li>
                </li>
            </ul>
            <!--Regio-->
            <ul class="blokken-dropdown">
                <li class="nav_header"><a href="https://www.nu.nl/regio" style="color: #1f2544;">Regio</a>
                <li class="nav_subitem"><a href="https://www.nu.nl/alphen-aan-den-rijn">Alphen a/d Rijn</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/amersfoort">Amersfoort</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/amsterdam">Amsterdam</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/arnhem">Arnhem</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/breda">Breda</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/den-bosch">Den Bosch</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/den-haag">Den Haag</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/ede">Ede</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/eindhoven">Eindhoven</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/groningen">Groningen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/haarlem">Haarlem</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/leiden">Leiden</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/nijmegen">Nijmegen</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/rotterdam">Rotterdam</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/tilburg">Tilburg</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/utrecht">Utrecht</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/zeeland">Zeeland</a></li>
                <li class="nav_subitem"><a href="https://www.nu.nl/zwolle">Zwolle</a></li>
            </ul>
            <ul class="blokken-dropdown-last">
                <li class="nav_header"><a href="https://www.nu.nl/over-nu">Over NU.nl</a></li>
                <li class="nav_header"><a href="https://www.nu.nl/nufolder">NUfolder</a></li>
                <li class="nav_header"><a href="https://www.nu.nl/nushop-adverteerder">NUshop</a></li>
                <li class="nav_header"><a href="https://www.nu.nl/tickets">Tickets</a></li>
            </ul>
        </div>
        <div class="dropdown-info">
            <li class="nav_header_info"><a href="https://www.nu.nl/over-nu">Over NU.nl</a></li>
            <li class="nav_header_info"><a href="https://www.nu.nl/nufolder">NUfolder</a></li>
            <li class="nav_header_info"><a href="https://www.nu.nl/nushop-adverteerder">NUshop</a></li>
            <li class="nav_header_info"><a href="https://www.nu.nl/tickets">Tickets</a></li>
        </div>
    </div>
</body>

</html>