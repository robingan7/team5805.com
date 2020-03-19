<!DOCTYPE html>
<html>
    <head>
        <title>FRC5805 | SMblyRequired</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./style/index.css">
        <link rel="stylesheet" type="text/css" href="./style/main.css">
        <script src="./javascript/index.js" defer></script>
        <script src="./javascript/main.js" defer></script>
        <script src="./javascript/loadBanners.js" defer></script>
        <meta name="description" content="FRC 5805 SMbly Required Team Docs">
        <style>
            img[alt="www.000webhost.com"] {
                display: none;
            }
        </style>
        <link rel="icon" href="img/ricon.png" type="image/png">
    </head>
    <body>
        <style>
            .menu a {
                color: white;
            }
            .menu a:hover, #current {
                border-bottom: 2px solid #17bebb;
               
            }
        </style>
        <main class="home">
            <div class="front-wrap captionBlock">
                <div class="front-wrap-content">
                    <h1>FRC5805-SMbly Required</h1>
                    <p>Robotics Club at <a class="normalLink"
                            href="https://www.smhs.org/academics/departments-and-courses/science/robotics">Santa Margarita HS</a></p>
                </div>
            </div>

            <div class="front-wrap awardBlock">
                <div class="front-wrap-content award-content">
                    <h1>Awards</h1>
                </div>
                <div class="front-wrap-content award-content banner-content">
                    <div id="bannersCollections" class="banners-collect">
                        <div class="banner collectt">
                            <img src="./img/first_icon.svg">
                            <div class="award-name">
                                <span>Loading</span>
                            </div>
                            
                            <div class="award-event">
                                <span>Loading</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="front-wrap currentRobotsBlock">
                <div class="robot-card robotLastest">
                    <div class="playerContainer">
                        <div id="player" class="iframeBackground">
                        </div>
                    </div>
                    <div class="front-wrap-content robot-content">
                        <h1>2020 Robot</h1>
                        <p><a class="normalLink" href="https://www.smhs.org/academics/departments-and-courses/science/robotics">Marvin</a>
                        </p>
                    </div>
                </div>
                <div class="robot-card robotSecondLastest">
                    <div class="playerContainer">
                        <div id="player2" class="iframeBackground">
                        </div>
                    </div>
                    <div class="front-wrap-content robot-content">
                        <h1>2019 Robot</h1>
                        <p><a class="normalLink" href="https://www.smhs.org/academics/departments-and-courses/science/robotics">Big Yoshi</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="front-wrap awardBlock">
                <div class="front-wrap-content award-content sponsor-content">
                    <h1>Our Sponsors</h1>
                </div>
                <div class="front-wrap-content award-content banner-content">
                    <div class="sponsor-images">
                        <img src="./img/sponsor/Applied_Medical.png" class="applyMed sponsorLogo collectt">
                        <img src="./img/sponsor/Mothers_Club.png" class="sponsorLogo collectt">
                        <img src="./img/sponsor/pacific-life.jpg" class="sponsorLogo collectt">
                        <img src="./img/sponsor/Solidworks.png" class="sponsorLogo collectt">
                        <img src="./img/sponsor/youtube_LogoAutodesk.png" class="sponsorLogo collectt">
                    </div>
                </div>
            </div>

            <div class="footerSection">
                <div class="icons-collect">
                    <div class="icons-wrap-list">
                        <a class="nav-link" href="https://github.com/orgs/SMblyRequired/dashboard"><i class="fab fa-github"></i></a>
                        <a class="nav-link" href="mailto:robotics@smhs.org"><i class="fas fa-envelope"></i></a>
                        <a class="nav-link" href="https://twitter.com/smblyrequired"><i class="fab fa-twitter"></i></a>
                        <a class="nav-link" href="https://www.instagram.com/smblyrequired5805"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-text">
                    <p>Powered by FRC5805-SMbly Required & TEC Club</p>
                    <p>Coded by Alex Lynd(2021) and Robin Gan(2021) during lockdown for COVID-19</p>
                </div>
            </div>

        </main>
        <?php
        include_once 'component/menu.php';
        printMenu('home');
        ?>
    </body>
</html>