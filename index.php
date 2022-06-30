<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="images/Nu-nl-logo.png">
    <title>NU - Het laatste nieuws het eerst op NU.nl</title>
</head>

<body>
    <?php require_once("./includes/nav.php"); ?>
    <div class="super-container" style="overflow-y: hidden;">
        <div class="container" style="overflow-y: hidden;">
            <!--icons als scherm op tablet modus zit-->
            <div class="icons_klein">
                <div class="icon1_klein">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                        <title lang="nl" data-v-1dd6691c=""></title>
                        <g data-v-1dd6691c="">
                            <g fill="currentColor" fill-rule="evenodd" data-v-1dd6691c="">
                                <path d="M18.807 19.975h-7.311a2.81 2.81 0 0 1-2.808-2.808c0-1.27.865-2.377 2.062-2.708a4.374 4.374 0 0 1 4.209-3.18c1.611 0 3.076.896 3.824 2.31h.024A3.197 3.197 0 0 1 22 16.782a3.197 3.197 0 0 1-3.193 3.193zm-3.848-7.695c-1.607 0-2.998 1.135-3.305 2.699a.5.5 0 0 1-.419.398 1.817 1.817 0 0 0-1.547 1.79 1.81 1.81 0 0 0 1.808 1.808h7.311A2.196 2.196 0 0 0 21 16.782c0-1.294-1.096-2.368-2.45-2.175a.499.499 0 0 1-.53-.298 3.33 3.33 0 0 0-3.061-2.03zM8.025 15.475a.502.502 0 0 1-.354-.146 4.006 4.006 0 0 1 0-5.657 4.005 4.005 0 0 1 5.658 0 .5.5 0 0 1-.707.707 3.005 3.005 0 0 0-4.243 0 3.002 3.002 0 0 0 0 4.242.502.502 0 0 1-.354.854M14.39 9.111a.502.502 0 0 1-.354-.854l1.06-1.06a.5.5 0 0 1 .707.706l-1.06 1.062a.502.502 0 0 1-.354.146M5.55 17.95a.502.502 0 0 1-.354-.854l1.061-1.06a.5.5 0 0 1 .707.706l-1.06 1.062a.502.502 0 0 1-.354.146M6.61 9.111a.502.502 0 0 1-.353-.146l-1.06-1.062a.5.5 0 0 1 .707-.707l1.06 1.061a.502.502 0 0 1-.353.854M5 13H3.5a.5.5 0 0 1 0-1H5a.5.5 0 0 1 0 1M10.5 7.5A.5.5 0 0 1 10 7V5.5a.5.5 0 0 1 1 0V7a.5.5 0 0 1-.5.5"></path>
                            </g>
                        </g>
                    </svg>
                    <div id="text_icon_klein">
                        <p>17 °C</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c=""></title>
                            <g data-v-1dd6691c="">
                                <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="icon1_klein">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="Huidige verkeerssituatie" role="presentation" data-v-1dd6691c="">
                        <title lang="nl" data-v-1dd6691c="">Huidige verkeerssituatie</title>
                        <g data-v-1dd6691c="">
                            <g data-v-1dd6691c="">
                                <defs>
                                    <path id="a" d="M14 0v6H0V0z"></path>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="currentColor" d="M5.233 14C4.553 14 4 14.523 4 15.167v2.5c0 .161.096.333.366.333h11.267c.177 0 .367-.134.367-.333v-2.5c0-.644-.554-1.167-1.234-1.167H5.233zm10.4 5H4.366C3.587 19 3 18.427 3 17.667v-2.5C3 13.972 4.002 13 5.233 13h9.533c1.232 0 2.234.972 2.234 2.167v2.5c0 .735-.614 1.333-1.367 1.333z"></path>
                                    <path fill="currentColor" d="M4.367 14.11a.5.5 0 0 1-.5-.5c0-1.26.916-3.61 2.667-3.61h3.899a.499.499 0 1 1 0 1h-3.9c-.92 0-1.666 1.58-1.666 2.61a.5.5 0 0 1-.5.5"></path>
                                    <path fill="currentColor" d="M15.633 14.11a.5.5 0 0 1-.5-.5c0-1.03-.747-2.61-1.667-2.61H9.567a.5.5 0 1 1 0-1h3.9c1.75 0 2.666 2.35 2.666 3.61a.5.5 0 0 1-.5.5M11.3 17H8.7a.5.5 0 0 1 0-1h2.6a.5.5 0 0 1 0 1M7 16a1 1 0 1 1-2 0 1 1 0 0 1 2 0M15 16a1 1 0 1 1-2 0 1 1 0 0 1 2 0M5 20a1 1 0 0 0 2 0v-1H5v1zM13 19v1a1 1 0 0 0 2 0v-1h-2z"></path>
                                    <g transform="translate(8 7)">
                                        <mask id="b" fill="#fff">
                                            <use xlink:href="#a"></use>
                                        </mask>
                                        <path fill="currentColor" d="M12.633 6h-5.18a.5.5 0 1 1 0-1h5.18c.177 0 .367-.134.367-.333v-2.5C13 1.523 12.446 1 11.766 1H2.233C1.553 1 1 1.523 1 2.167V3a.5.5 0 0 1-1 0v-.833C0 .972 1.002 0 2.233 0h9.533C12.998 0 14 .972 14 2.167v2.5C14 5.402 13.386 6 12.633 6" mask="url(#b)"></path>
                                    </g>
                                    <path fill="currentColor" d="M9.367 8.11a.5.5 0 0 1-.5-.5c0-1.26.916-3.61 2.667-3.61h3.899a.499.499 0 1 1 0 1h-3.9c-.92 0-1.666 1.58-1.666 2.61a.5.5 0 0 1-.5.5"></path>
                                    <path fill="currentColor" d="M20.633 8.11a.5.5 0 0 1-.5-.5c0-1.03-.747-2.61-1.667-2.61h-3.899a.5.5 0 1 1 0-1h3.9c1.75 0 2.666 2.35 2.666 3.61a.5.5 0 0 1-.5.5M16.3 11h-2.6a.5.5 0 0 1 0-1h2.6a.5.5 0 0 1 0 1M12 10a1 1 0 1 1-2 0 1 1 0 0 1 2 0M20 10a1 1 0 1 1-2 0 1 1 0 0 1 2 0M18 13v1a1 1 0 0 0 2 0v-1h-2z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <div id="text_icon_klein">
                        <p id="verkeer_icon">18 km (3)</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c=""></title>
                            <g data-v-1dd6691c="">
                                <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="icon1_klein">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="Beurs aandelen" role="presentation" data-v-1dd6691c="">
                        <title lang="nl" data-v-1dd6691c="">Beurs aandelen</title>
                        <g data-v-1dd6691c="">
                            <g fill="currentColor" fill-rule="nonzero" data-v-1dd6691c="">
                                <path d="M10.316 8.642l-5.49 4.737a.5.5 0 1 1-.653-.758L9.97 7.62a.5.5 0 0 1 .63-.018l3.51 2.679 3.893-4.685a.5.5 0 1 1 .769.639l-4.199 5.054a.5.5 0 0 1-.688.078l-3.57-2.724zM5 17v2h2v-2H5zm0-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zM11 15v4h2v-4h-2zm0-1h2a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1zM17 13v6h2v-6h-2zm0-1h2a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1z"></path>
                                <path d="M16.189 5.968a.5.5 0 1 1-.182-.983l2.944-.543a.5.5 0 0 1 .583.405l.52 2.955a.5.5 0 1 1-.984.173l-.434-2.458-2.447.451z"></path>
                            </g>
                        </g>
                    </svg>
                    <div id="text_icon_klein">
                        <p>656,19</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c=""></title>
                            <g data-v-1dd6691c="">
                                <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="icon1_klein">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="TV Gids" role="presentation" data-v-1dd6691c="">
                        <title lang="nl" data-v-1dd6691c="">TV Gids</title>
                        <g data-v-1dd6691c="">
                            <g fill="currentColor" fill-rule="evenodd" data-v-1dd6691c="">
                                <path d="M6.5 9C5.673 9 5 9.673 5 10.5v7c0 .827.673 1.5 1.5 1.5h11c.827 0 1.5-.673 1.5-1.5v-7c0-.827-.673-1.5-1.5-1.5h-11zm11 11h-11A2.503 2.503 0 014 17.5v-7C4 9.122 5.122 8 6.5 8h11c1.378 0 2.5 1.122 2.5 2.5v7c0 1.378-1.122 2.5-2.5 2.5z"></path>
                                <path d="M11.641 8.848c-.897-.926-2.239-2.295-2.42-2.439 0 0-.258-.211-.221-.409.048-.251.391-.488.391-.488.322-.075.34-.076 2.615 2.276l3.64-3.642a.5.5 0 01.707.707l-4 4a.497.497 0 01-.712-.005zM7 11v6h7.999L15 11H7zm8 6v.5-.5zm0 1H7c-.551 0-1-.449-1-1v-6c0-.551.449-1 1-1h8c.551 0 1 .449 1 1v6c0 .551-.449 1-1 1zm3-7.5a.5.5 0 11-1 0 .5.5 0 011 0m0 2a.5.5 0 11-1 0 .5.5 0 011 0"></path>
                            </g>
                        </g>
                    </svg>
                    <div id="text_icon_klein">
                        <p>TV gids</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c=""></title>
                            <g data-v-1dd6691c="">
                                <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="icon1_klein">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="Voetbal wedstrijden" role="presentation" data-v-1dd6691c="">
                        <title lang="nl" data-v-1dd6691c="">Voetbal wedstrijden</title>
                        <g data-v-1dd6691c="">
                            <g fill="currentColor" fill-rule="evenodd" data-v-1dd6691c="">
                                <path d="M3.5 18.89a.502.502 0 00.354-.146l1.89-1.89a.5.5 0 00-.707-.708l-1.89 1.89a.502.502 0 00.353.854m5.537 1.256l-1.89 1.891a.5.5 0 00.706.707l1.891-1.89a.5.5 0 00-.707-.708m-2.891-1l-3 3a.5.5 0 00.707.707l3-3a.5.5 0 00-.707-.707m8.526-5.085l-2.076-.809.16-2.033 2.268-.176.98 1.67-1.332 1.348zm1.057-3.793a.506.506 0 00-.47-.246l-3.006.232a.501.501 0 00-.46.46l-.224 2.83a.5.5 0 00.317.505l2.729 1.063a.506.506 0 00.537-.114l1.833-1.855a.5.5 0 00.077-.604l-1.333-2.27z"></path>
                                <path d="M9.62 15.342l-.016 1.833a6.504 6.504 0 01-1.66-2.63l1.676.797zm.44-6.887l-1.234.273a6.556 6.556 0 011.507-1.508l-.273 1.235zm6.887-.44l-.799-1.682a6.5 6.5 0 012.64 1.666l-1.84.016zm2.74 5.524l.91-.803a6.463 6.463 0 01-.483 2.247l-.428-1.444zm-2.3 4.565a6.446 6.446 0 01-2.98.88l1.232-1.398 1.748.518zm1.47-1.18a6.383 6.383 0 01-.449.438l-2.575-.762a.856.856 0 00-.88.253l-1.82 2.065c-.105-.016-.21-.026-.314-.048a6.386 6.386 0 01-.64-.163 6.506 6.506 0 01-1.583-.746l.025-2.705a.85.85 0 00-.485-.776l-2.47-1.173c-.004-.023-.009-.045-.012-.068a6.59 6.59 0 01-.043-.768c0-.071.008-.14.01-.21.007-.19.02-.38.044-.57a6.295 6.295 0 01.153-.796c.021-.083.04-.168.064-.251.071-.235.152-.467.25-.694.007-.017.016-.033.024-.05l2.214-.49a.852.852 0 00.646-.646l.49-2.216c.022-.01.043-.022.066-.032.215-.091.434-.17.656-.236.1-.03.203-.053.305-.08.151-.036.304-.07.458-.097.103-.017.206-.035.311-.047.183-.023.367-.036.551-.043.073-.003.146-.01.22-.011.257-.001.515.014.774.043.021.002.041.007.063.01l1.175 2.475a.856.856 0 00.776.486l2.711-.025c.064.1.126.2.185.304.03.052.061.104.09.157.063.119.12.242.175.365.037.08.074.16.108.243a7.419 7.419 0 01.297.94c.026.109.05.219.071.329.01.048.014.096.021.143l-1.565 1.38a.85.85 0 00-.254.88l.735 2.483c-.047.067-.097.132-.147.197a6.358 6.358 0 01-.43.513zm2.696-5.302c-.005-.076-.02-.131-.029-.19a6.96 6.96 0 00-.353-1.434c-.035-.096-.067-.191-.105-.285a7.257 7.257 0 00-.233-.516c-.043-.086-.08-.174-.125-.26a7.502 7.502 0 00-.4-.652c-.018-.027-.032-.056-.05-.083-.01-.014-.027-.021-.038-.034a7.495 7.495 0 00-4.862-3.055c-.083-.023-.13-.021-.178-.027a7.46 7.46 0 00-.917-.078c-.039-.001-.079-.006-.119-.006a7.344 7.344 0 00-.993.066c-.09.012-.18.027-.27.042a7.374 7.374 0 00-.833.185c-.054.015-.11.025-.164.042-.3.093-.588.21-.872.34-.05.023-.106.037-.156.06-.018.01-.029.027-.046.038A7.537 7.537 0 007.38 9.21c-.01.015-.025.023-.032.039-.02.044-.032.09-.052.133a7.541 7.541 0 00-.354.907c-.015.048-.023.095-.037.143-.078.274-.14.555-.187.842-.015.094-.03.188-.043.284a7.497 7.497 0 00-.066.94c.002.089.01.146.01.203.008.294.034.58.075.865.007.05.005.102.013.153a7.574 7.574 0 003.05 4.877c.018.017.028.042.05.056.401.283.836.51 1.285.708.046.02.091.043.138.063a7.412 7.412 0 00.78.27c.178.053.356.102.538.14.078.017.157.027.235.04.16.03.32.068.481.086a9.229 9.229 0 00.845.04 7.457 7.457 0 004.698-1.663c.02-.011.04-.013.057-.026a8.16 8.16 0 00.551-.501c.375-.375.71-.787.991-1.225.013-.02.015-.044.024-.065a7.441 7.441 0 001.18-4.02c0-.297-.023-.59-.057-.878z"></path>
                            </g>
                        </g>
                    </svg>
                    <div id="text_icon_klein">
                        <p>0 live</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c=""></title>
                            <g data-v-1dd6691c="">
                                <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="left_div" style="height: 200vh;">
                <div class="content_datum">
                    <div class="datum">
                        <script>
                            document.write(newdate.toLocaleDateString('nl-NL', options));
                        </script>
                        <div class="divider-vertical">
                            <div class="divider-vertical_1"></div>
                            <div class="divider-vertical_1"></div>
                            <div class="divider-vertical_1"></div>
                            <div class="divider-vertical_1"></div>
                            <div class="divider-vertical_1"></div>
                            <div class="divider-vertical_1"></div>
                        </div>
                        <p>Het laatste nieuws het eerst op NU.nl</p>
                    </div>
                    <div class="content_datum_svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                        </svg>
                    </div>
                </div>
                <?php
                //Artikel ID uit de get halen.
                $limits = 1;

                $artikel = $pdo->prepare("SELECT * FROM berichten ORDER BY berichtId DESC LIMIT :limit");
                $artikel->bindValue('limit', $limits, PDO::PARAM_INT);
                $artikel->execute();
                $data = $artikel->fetchAll();
                foreach ($data as $artikel) {
                    $str = $artikel['titel'];
                    echo "<div class='titelBox'><a href='artikel.php?id=" . $artikel["berichtId"] . "'><img class='imageSize' src='./images/artikelAfbeelding/" . $artikel['images'] . "' alt='Artikel afbeelding'>";
                    echo "<div class='titelaArtikel'><h1 href='artikel.php?id=" . $artikel["berichtId"] . "'>" . $str . "</h1></a></div></div>";
                }
                $limit = 9;

                $artikel = $pdo->prepare("SELECT * FROM berichten ORDER BY berichtId DESC LIMIT :limit");
                $artikel->bindValue('limit', $limit, PDO::PARAM_INT);
                $artikel->execute();
                $data = $artikel->fetchAll();
                ?>
                <div class="artikels">
                    <?php
                    foreach ($data as $artikel) {
                        $str = $artikel['titel'];
                        //echo ook al een foto als scherm kleiner wordt dan komt die foto
                        echo "<div class='artikel_text'><span class='item-marker__bullet'></span><div class='picture_artikel'><img class='imageSize_artikel' src='./images/artikelAfbeelding/" . $artikel['images'] . "' alt='Artikel afbeelding'></div><li>";
                        echo "<a class='titel' href='artikel.php?id=" . $artikel["berichtId"] . "'>" . $str . "</a>";
                        echo "</li></div>";
                    }
                    ?>
                </div>
                <hr class="divider">
                <a href="https://www.nu.nl/videos/nieuwsvideos">
                    <h1 class="kopTitel">Nieuwsvideo's</h1>
                </a>
                <!--De video's die zijn gelinkt naar echte website-->
                <div class="videoContainer">
                    <div class="videoLinks">
                        <div class="videoWrapper">
                            <a href="https://www.nu.nl/275013/video/zo-blijft-je-huis-koel-tijdens-zomerse-dagen.html">
                                <img src="./images/extra/video1.png" class="videoAfbeelding" alt="Video zomerdagen">
                                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
                        </div>
                        <p class="videoTitel">Zo blijft je huis koel tijdens zomerse dagen</p></a>
                        <div class="videoWrapper">
                            <a href="https://www.nu.nl/293595/video/eu-leiders-arriveren-in-kyiv-een-belangrijk-moment.html">
                                <img src="./images/extra/video2.png" class="videoAfbeelding" alt="EU leiders Kyiv">
                                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
                        </div>
                        <p class="videoTitel">EU-leiders arriveren in Kyiv: 'Een belangrijk moment</p></a>
                    </div>
                    <div class="videoRechts">
                        <div class="videoWrapper">
                            <a href="https://www.nu.nl/293594/video/enorme-tornado-raast-over-dorp-in-china.html">
                                <img src="./images/extra/video3.png" class="videoAfbeelding" alt="Tornado Chinees dorp">
                                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
                        </div>
                        <p class="videoTitel">Enorme tornado raast over dorp in China</p></a>
                        <div class="videoWrapper">
                            <a href="https://www.nu.nl/293591/video/indiase-hulpdiensten-halen-jongen-na-dagen-uit-put.html">
                                <img src="./images/extra/video4.png" class="videoAfbeelding" alt="Jongen uit put gered India">
                                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
                        </div>
                        <p class="videoTitel">Indiase hulpdiensten halen jongen na dagen uit put</p>
                        </a>
                    </div>
                </div>
            </div> <!-- einde left_div -->
            <!--Rechter div beginner-->
            <div class="right_div" style="height: 200vh; overflow-y:hidden;">
                <div class="icons">
                    <div class="icon1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c=""></title>
                            <g data-v-1dd6691c="">
                                <g fill="currentColor" fill-rule="evenodd" data-v-1dd6691c="">
                                    <path d="M18.807 19.975h-7.311a2.81 2.81 0 0 1-2.808-2.808c0-1.27.865-2.377 2.062-2.708a4.374 4.374 0 0 1 4.209-3.18c1.611 0 3.076.896 3.824 2.31h.024A3.197 3.197 0 0 1 22 16.782a3.197 3.197 0 0 1-3.193 3.193zm-3.848-7.695c-1.607 0-2.998 1.135-3.305 2.699a.5.5 0 0 1-.419.398 1.817 1.817 0 0 0-1.547 1.79 1.81 1.81 0 0 0 1.808 1.808h7.311A2.196 2.196 0 0 0 21 16.782c0-1.294-1.096-2.368-2.45-2.175a.499.499 0 0 1-.53-.298 3.33 3.33 0 0 0-3.061-2.03zM8.025 15.475a.502.502 0 0 1-.354-.146 4.006 4.006 0 0 1 0-5.657 4.005 4.005 0 0 1 5.658 0 .5.5 0 0 1-.707.707 3.005 3.005 0 0 0-4.243 0 3.002 3.002 0 0 0 0 4.242.502.502 0 0 1-.354.854M14.39 9.111a.502.502 0 0 1-.354-.854l1.06-1.06a.5.5 0 0 1 .707.706l-1.06 1.062a.502.502 0 0 1-.354.146M5.55 17.95a.502.502 0 0 1-.354-.854l1.061-1.06a.5.5 0 0 1 .707.706l-1.06 1.062a.502.502 0 0 1-.354.146M6.61 9.111a.502.502 0 0 1-.353-.146l-1.06-1.062a.5.5 0 0 1 .707-.707l1.06 1.061a.502.502 0 0 1-.353.854M5 13H3.5a.5.5 0 0 1 0-1H5a.5.5 0 0 1 0 1M10.5 7.5A.5.5 0 0 1 10 7V5.5a.5.5 0 0 1 1 0V7a.5.5 0 0 1-.5.5"></path>
                                </g>
                            </g>
                        </svg>
                        <div id="text_icon">
                            <p>17 °C</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                                <title lang="nl" data-v-1dd6691c=""></title>
                                <g data-v-1dd6691c="">
                                    <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="icon1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="Huidige verkeerssituatie" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c="">Huidige verkeerssituatie</title>
                            <g data-v-1dd6691c="">
                                <g data-v-1dd6691c="">
                                    <defs>
                                        <path id="a" d="M14 0v6H0V0z"></path>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="currentColor" d="M5.233 14C4.553 14 4 14.523 4 15.167v2.5c0 .161.096.333.366.333h11.267c.177 0 .367-.134.367-.333v-2.5c0-.644-.554-1.167-1.234-1.167H5.233zm10.4 5H4.366C3.587 19 3 18.427 3 17.667v-2.5C3 13.972 4.002 13 5.233 13h9.533c1.232 0 2.234.972 2.234 2.167v2.5c0 .735-.614 1.333-1.367 1.333z"></path>
                                        <path fill="currentColor" d="M4.367 14.11a.5.5 0 0 1-.5-.5c0-1.26.916-3.61 2.667-3.61h3.899a.499.499 0 1 1 0 1h-3.9c-.92 0-1.666 1.58-1.666 2.61a.5.5 0 0 1-.5.5"></path>
                                        <path fill="currentColor" d="M15.633 14.11a.5.5 0 0 1-.5-.5c0-1.03-.747-2.61-1.667-2.61H9.567a.5.5 0 1 1 0-1h3.9c1.75 0 2.666 2.35 2.666 3.61a.5.5 0 0 1-.5.5M11.3 17H8.7a.5.5 0 0 1 0-1h2.6a.5.5 0 0 1 0 1M7 16a1 1 0 1 1-2 0 1 1 0 0 1 2 0M15 16a1 1 0 1 1-2 0 1 1 0 0 1 2 0M5 20a1 1 0 0 0 2 0v-1H5v1zM13 19v1a1 1 0 0 0 2 0v-1h-2z"></path>
                                        <g transform="translate(8 7)">
                                            <mask id="b" fill="#fff">
                                                <use xlink:href="#a"></use>
                                            </mask>
                                            <path fill="currentColor" d="M12.633 6h-5.18a.5.5 0 1 1 0-1h5.18c.177 0 .367-.134.367-.333v-2.5C13 1.523 12.446 1 11.766 1H2.233C1.553 1 1 1.523 1 2.167V3a.5.5 0 0 1-1 0v-.833C0 .972 1.002 0 2.233 0h9.533C12.998 0 14 .972 14 2.167v2.5C14 5.402 13.386 6 12.633 6" mask="url(#b)"></path>
                                        </g>
                                        <path fill="currentColor" d="M9.367 8.11a.5.5 0 0 1-.5-.5c0-1.26.916-3.61 2.667-3.61h3.899a.499.499 0 1 1 0 1h-3.9c-.92 0-1.666 1.58-1.666 2.61a.5.5 0 0 1-.5.5"></path>
                                        <path fill="currentColor" d="M20.633 8.11a.5.5 0 0 1-.5-.5c0-1.03-.747-2.61-1.667-2.61h-3.899a.5.5 0 1 1 0-1h3.9c1.75 0 2.666 2.35 2.666 3.61a.5.5 0 0 1-.5.5M16.3 11h-2.6a.5.5 0 0 1 0-1h2.6a.5.5 0 0 1 0 1M12 10a1 1 0 1 1-2 0 1 1 0 0 1 2 0M20 10a1 1 0 1 1-2 0 1 1 0 0 1 2 0M18 13v1a1 1 0 0 0 2 0v-1h-2z"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div id="text_icon">
                            <p id="verkeer_icon">18 km (3)</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                                <title lang="nl" data-v-1dd6691c=""></title>
                                <g data-v-1dd6691c="">
                                    <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="icon1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="Beurs aandelen" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c="">Beurs aandelen</title>
                            <g data-v-1dd6691c="">
                                <g fill="currentColor" fill-rule="nonzero" data-v-1dd6691c="">
                                    <path d="M10.316 8.642l-5.49 4.737a.5.5 0 1 1-.653-.758L9.97 7.62a.5.5 0 0 1 .63-.018l3.51 2.679 3.893-4.685a.5.5 0 1 1 .769.639l-4.199 5.054a.5.5 0 0 1-.688.078l-3.57-2.724zM5 17v2h2v-2H5zm0-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zM11 15v4h2v-4h-2zm0-1h2a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1zM17 13v6h2v-6h-2zm0-1h2a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1z"></path>
                                    <path d="M16.189 5.968a.5.5 0 1 1-.182-.983l2.944-.543a.5.5 0 0 1 .583.405l.52 2.955a.5.5 0 1 1-.984.173l-.434-2.458-2.447.451z"></path>
                                </g>
                            </g>
                        </svg>
                        <div id="text_icon">
                            <p>656,19</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                                <title lang="nl" data-v-1dd6691c=""></title>
                                <g data-v-1dd6691c="">
                                    <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="icon1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="TV Gids" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c="">TV Gids</title>
                            <g data-v-1dd6691c="">
                                <g fill="currentColor" fill-rule="evenodd" data-v-1dd6691c="">
                                    <path d="M6.5 9C5.673 9 5 9.673 5 10.5v7c0 .827.673 1.5 1.5 1.5h11c.827 0 1.5-.673 1.5-1.5v-7c0-.827-.673-1.5-1.5-1.5h-11zm11 11h-11A2.503 2.503 0 014 17.5v-7C4 9.122 5.122 8 6.5 8h11c1.378 0 2.5 1.122 2.5 2.5v7c0 1.378-1.122 2.5-2.5 2.5z"></path>
                                    <path d="M11.641 8.848c-.897-.926-2.239-2.295-2.42-2.439 0 0-.258-.211-.221-.409.048-.251.391-.488.391-.488.322-.075.34-.076 2.615 2.276l3.64-3.642a.5.5 0 01.707.707l-4 4a.497.497 0 01-.712-.005zM7 11v6h7.999L15 11H7zm8 6v.5-.5zm0 1H7c-.551 0-1-.449-1-1v-6c0-.551.449-1 1-1h8c.551 0 1 .449 1 1v6c0 .551-.449 1-1 1zm3-7.5a.5.5 0 11-1 0 .5.5 0 011 0m0 2a.5.5 0 11-1 0 .5.5 0 011 0"></path>
                                </g>
                            </g>
                        </svg>
                        <div id="text_icon">
                            <p>TV gids</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                                <title lang="nl" data-v-1dd6691c=""></title>
                                <g data-v-1dd6691c="">
                                    <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="icon1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24px" width="24px" aria-labelledby="Voetbal wedstrijden" role="presentation" data-v-1dd6691c="">
                            <title lang="nl" data-v-1dd6691c="">Voetbal wedstrijden</title>
                            <g data-v-1dd6691c="">
                                <g fill="currentColor" fill-rule="evenodd" data-v-1dd6691c="">
                                    <path d="M3.5 18.89a.502.502 0 00.354-.146l1.89-1.89a.5.5 0 00-.707-.708l-1.89 1.89a.502.502 0 00.353.854m5.537 1.256l-1.89 1.891a.5.5 0 00.706.707l1.891-1.89a.5.5 0 00-.707-.708m-2.891-1l-3 3a.5.5 0 00.707.707l3-3a.5.5 0 00-.707-.707m8.526-5.085l-2.076-.809.16-2.033 2.268-.176.98 1.67-1.332 1.348zm1.057-3.793a.506.506 0 00-.47-.246l-3.006.232a.501.501 0 00-.46.46l-.224 2.83a.5.5 0 00.317.505l2.729 1.063a.506.506 0 00.537-.114l1.833-1.855a.5.5 0 00.077-.604l-1.333-2.27z"></path>
                                    <path d="M9.62 15.342l-.016 1.833a6.504 6.504 0 01-1.66-2.63l1.676.797zm.44-6.887l-1.234.273a6.556 6.556 0 011.507-1.508l-.273 1.235zm6.887-.44l-.799-1.682a6.5 6.5 0 012.64 1.666l-1.84.016zm2.74 5.524l.91-.803a6.463 6.463 0 01-.483 2.247l-.428-1.444zm-2.3 4.565a6.446 6.446 0 01-2.98.88l1.232-1.398 1.748.518zm1.47-1.18a6.383 6.383 0 01-.449.438l-2.575-.762a.856.856 0 00-.88.253l-1.82 2.065c-.105-.016-.21-.026-.314-.048a6.386 6.386 0 01-.64-.163 6.506 6.506 0 01-1.583-.746l.025-2.705a.85.85 0 00-.485-.776l-2.47-1.173c-.004-.023-.009-.045-.012-.068a6.59 6.59 0 01-.043-.768c0-.071.008-.14.01-.21.007-.19.02-.38.044-.57a6.295 6.295 0 01.153-.796c.021-.083.04-.168.064-.251.071-.235.152-.467.25-.694.007-.017.016-.033.024-.05l2.214-.49a.852.852 0 00.646-.646l.49-2.216c.022-.01.043-.022.066-.032.215-.091.434-.17.656-.236.1-.03.203-.053.305-.08.151-.036.304-.07.458-.097.103-.017.206-.035.311-.047.183-.023.367-.036.551-.043.073-.003.146-.01.22-.011.257-.001.515.014.774.043.021.002.041.007.063.01l1.175 2.475a.856.856 0 00.776.486l2.711-.025c.064.1.126.2.185.304.03.052.061.104.09.157.063.119.12.242.175.365.037.08.074.16.108.243a7.419 7.419 0 01.297.94c.026.109.05.219.071.329.01.048.014.096.021.143l-1.565 1.38a.85.85 0 00-.254.88l.735 2.483c-.047.067-.097.132-.147.197a6.358 6.358 0 01-.43.513zm2.696-5.302c-.005-.076-.02-.131-.029-.19a6.96 6.96 0 00-.353-1.434c-.035-.096-.067-.191-.105-.285a7.257 7.257 0 00-.233-.516c-.043-.086-.08-.174-.125-.26a7.502 7.502 0 00-.4-.652c-.018-.027-.032-.056-.05-.083-.01-.014-.027-.021-.038-.034a7.495 7.495 0 00-4.862-3.055c-.083-.023-.13-.021-.178-.027a7.46 7.46 0 00-.917-.078c-.039-.001-.079-.006-.119-.006a7.344 7.344 0 00-.993.066c-.09.012-.18.027-.27.042a7.374 7.374 0 00-.833.185c-.054.015-.11.025-.164.042-.3.093-.588.21-.872.34-.05.023-.106.037-.156.06-.018.01-.029.027-.046.038A7.537 7.537 0 007.38 9.21c-.01.015-.025.023-.032.039-.02.044-.032.09-.052.133a7.541 7.541 0 00-.354.907c-.015.048-.023.095-.037.143-.078.274-.14.555-.187.842-.015.094-.03.188-.043.284a7.497 7.497 0 00-.066.94c.002.089.01.146.01.203.008.294.034.58.075.865.007.05.005.102.013.153a7.574 7.574 0 003.05 4.877c.018.017.028.042.05.056.401.283.836.51 1.285.708.046.02.091.043.138.063a7.412 7.412 0 00.78.27c.178.053.356.102.538.14.078.017.157.027.235.04.16.03.32.068.481.086a9.229 9.229 0 00.845.04 7.457 7.457 0 004.698-1.663c.02-.011.04-.013.057-.026a8.16 8.16 0 00.551-.501c.375-.375.71-.787.991-1.225.013-.02.015-.044.024-.065a7.441 7.441 0 001.18-4.02c0-.297-.023-.59-.057-.878z"></path>
                                </g>
                            </g>
                        </svg>
                        <div id="text_icon">
                            <p>0 live</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="2em" width="1em" aria-labelledby="" role="presentation" data-v-1dd6691c="">
                                <title lang="nl" data-v-1dd6691c=""></title>
                                <g data-v-1dd6691c="">
                                    <path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" data-v-1dd6691c=""></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <?php include 'includes/zijbalk.php'; ?>
            </div> <!-- einde right_div -->
        </div>
    </div>
    <?php require './includes/footer.php' ?>
</body>

</html>